<!doctype html>
<html lang="en">

<head>
    <title>Contacts chicago Sam Ice Cream Truck</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/sami.css') }}">
    <link rel="icon" href="{{ asset('images/logo2.ico') }}" type="image/x-icon" />
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/chicagoSamIceCreamTruck') }}">
                    <img style="width: 71px; height: 89px;" src="{{ asset('images/logo2.webp') }}"
                        alt="Logo sam ice cream truck">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto text-center">
                        <li class="nav-item">
                            <a class="btn btn-success m-2 text-white" href="{{ '/chicagoSamIceCreamTruck' }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                                @csrf
                                <button type="submit" class="btn btn-danger m-2">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container limits">
            <h2>Contacts</h2>
            @if (session('success'))
            <div class="alert alert-info alert-dismissible fade show">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            @endif
            
            @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif
            
            @if ($contacts->isEmpty())
                <div class="alert alert-info mt-4">
                    No one has contacted Sam's Ice Cream Truck yet 🍦.
                </div>
            @else
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Message</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contacts as $contact)
                                <tr>
                                    <td>{{ $contact->created_at }}</td>
                                    <td>{{ $contact->name }}</td>
                                    <td>
                                        <a class="text-primary" href="mailto:{{ $contact->email }}">{{ $contact->email }}</a>
                                    </td>
                                    <td>
                                        <a class="text-primary" href="sms:{{ $contact->phone }}">{{ $contact->phone }}</a>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-primary show-message-btn" 
                                            data-contact-id="{{ $contact->id }}"
                                            data-contact-name="{{ $contact->name }}">
                                            Message
                                        </button>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-danger show-delete-btn" 
                                            data-contact-id="{{ $contact->id }}"
                                            data-contact-name="{{ $contact->name }}">
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>

        <!-- Message Modal -->
        <div class="modal fade" id="messageModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="messageModalTitle">Message from </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="messageModalBody">
                        Loading message...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Delete Confirmation Modal -->
        <div class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Confirm Delete</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="deleteModalBody">
                        Are you sure you want to delete this contact?
                    </div>
                    <div class="modal-footer">
                        <form id="deleteForm" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Yes, Delete</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="copyright_section">
            <div class="container">
                <p class="copyright_text">2025 All Rights Reserved. © Development by <a
                        href="https://github.com/Sami-AL-njadat"> SAM 95 NJT</a></p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5 JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JavaScript -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Message data
            window.messageData = {
                @foreach($contacts as $contact)
                    {{ $contact->id }}: {
                        message: @json($contact->message)
                    },
                @endforeach
            };

            // Initialize Bootstrap modals
            const messageModal = new bootstrap.Modal(document.getElementById('messageModal'));
            const deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));

            // Message modal functionality
            document.querySelectorAll('.show-message-btn').forEach((button) => {
                button.addEventListener('click', function() {
                    const contactId = this.getAttribute('data-contact-id');
                    const contactName = this.getAttribute('data-contact-name');
                    
                    document.getElementById('messageModalTitle').textContent = `Message from ${contactName}`;
                    document.getElementById('messageModalBody').textContent = window.messageData[contactId].message;
                    
                    messageModal.show();
                });
            });

            // Delete modal functionality
            document.querySelectorAll('.show-delete-btn').forEach((button) => {
                button.addEventListener('click', function() {
                    const contactId = this.getAttribute('data-contact-id');
                    const contactName = this.getAttribute('data-contact-name');
                    
                    document.getElementById('deleteModalBody').textContent = 
                        `Are you sure you want to delete the contact from ${contactName}?`;
                    document.getElementById('deleteForm').action = `/contacts/${contactId}`;
                    
                    deleteModal.show();
                });
            });
        });
    </script>
</body>
</html>
<!doctype html>
<html lang="en">

<head>
    <title>Contacts chicago Sam Ice Cream Truck</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('css/contact-v2.css') }}">
    <link rel="icon" href="{{ asset('images/logo2.ico') }}" type="image/x-icon" />
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/chicagoSamIceCreamTruck') }}">
                    <img style="width: 71px; height: 89px;" src="{{ asset('images/logo2.webp') }}"
                        alt="Logo sam ice cream truck">
                </a>
                <button class="navbar-toggler" type="button" id="mobileMenuButton">
                    <span class="navbar-toggler-icon">☰</span>
                </button>

                <div class="navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto text-center">
                        <li class="nav-item">
                            <a class="btn btn-success m-2" style="color: white"
                                href="{{ '/chicagoSamIceCreamTruck' }}">Home
                                <span class="visually-hidden">(current)</span></a>
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
            <div class="alert alert-info">
                {{ session('success') }}
                <button type="button" class="alert-close">×</button>
            </div>
        @endif
        
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
                <button type="button" class="alert-close">×</button>
            </div>
        @endif
        @if ($contacts->isEmpty())
        <div class="alert alert-info mt-4">
                    No one has contacted Sam's Ice Cream Truck yet 🍦.
                </div>
            @else
                <div class="table-responsive">
                    <table class="table">
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
                                        <a style="color: blue"
                                            href="mailto:{{ $contact->email }}">{{ $contact->email }}</a>
                                    </td>
                                    <td>
                                        <a style="color: blue"
                                            href="sms:{{ $contact->phone }}">{{ $contact->phone }}</a>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-primary show-message-btn" 
                                            data-contact-id="{{ $contact->id }}"
                                            data-contact-name="{{ $contact->name }}">
                                            message
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
        <div id="messageModal" class="custom-modal">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 id="messageModalTitle">Message from </h3>
                    <button type="button" class="modal-close">&times;</button>
                </div>
                <div class="modal-body" id="messageModalBody">
                    Loading message...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary close-message-modal">Close</button>
                </div>
            </div>
        </div>

        <!-- Delete Modal -->
        <div id="deleteModal" class="custom-modal">
            <div class="modal-content">
                <div class="modal-header">
                    <h3>Confirm Delete</h3>
                    <button type="button" class="modal-close">&times;</button>
                </div>
                <div class="modal-body" id="deleteModalBody">
                    Are you sure you want to delete this contact?
                </div>
                <div class="modal-footer">
                    <form id="deleteForm" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Yes, Delete</button>
                        <button type="button" class="btn btn-secondary close-delete-modal">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="copyright_section">
            <div class="container">
                <p class="copyright_text">2025 All Rights Reserved. © Development by <a
                        href="https://github.com/Sami-AL-njadat"> SAM 95 NJT</a> </p>
            </div>
        </div>
    </footer>

<!-- In your Blade template, before including custom-modals.js -->
<script>
    window.messageData = {
        @foreach($contacts as $contact)
            {{ $contact->id }}: {
                message: @json($contact->message)
            },
        @endforeach
    };
</script>
<script src="{{ asset('js/custom-modals.js') }}"></script>



</body>
</html>
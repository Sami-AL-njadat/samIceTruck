<!doctype html>
<html lang="en">

<head>
    <title>Contacts chicago Sam Ice Cream Truck</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
 
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/contact-v3.css') }}">


    <link rel="icon" href="{{ asset('images/logo2.ico') }}" type="image/x-icon" />

</head>

<body>
 
    <header>
  


        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/chicagoSamIceCreamTruck') }}">
                    <img style="width: 71px; height: 89px;" src="{{ asset('images/logo2.webp') }}"
                        alt="Logo sam ice cream truck">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto text-center mb-2 mb-lg-0">
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
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        
        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
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

                                        <a style="color: blue"
                                            href="mailto:{{ $contact->email }}">{{ $contact->email }}</a>
                                    </td>
                                    <td>
                                        <a style="color: blue"
                                            href="sms:{{ $contact->phone }}">{{ $contact->phone }}</a>

                                    </td>
                                    <td>
                                        <!-- Button trigger custom modal -->
                                        <button type="button" class="btn btn-primary" data-custom-toggle="modal"
                                            data-custom-target="#customMessageModal{{ $contact->id }}">
                                            message
                                        </button>
                                    
                                        <!-- Custom Modal -->
                                        <div class="custom-modal" id="customMessageModal{{ $contact->id }}">
                                            <div class="custom-modal-content custom-modal-scrollable">
                                                <div class="custom-modal-header">
                                                    <h5 class="custom-modal-title">Message from {{ $contact->name }}</h5>
                                                    <button type="button" class="custom-modal-close">&times;</button>
                                                </div>
                                                <div class="custom-modal-body">
                                                    {{ $contact->message }}
                                                </div>
                                                <div class="custom-modal-footer">
                                                    <button type="button" class="custom-modal-btn custom-modal-btn-secondary" 
                                                        onclick="document.getElementById('customMessageModal{{ $contact->id }}').classList.remove('show'); document.body.style.overflow = ''">
                                                        Close
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    
                                    <td>
                                        <!-- Delete Button Triggering Custom Modal -->
                                        <button type="button" class="btn btn-danger" data-custom-toggle="modal"
                                            data-custom-target="#customDeleteModal{{ $contact->id }}">
                                            Delete
                                        </button>
                                    
                                        <!-- Custom Delete Modal -->
                                        <div class="custom-modal" id="customDeleteModal{{ $contact->id }}">
                                            <div class="custom-modal-content">
                                                <div class="custom-modal-header">
                                                    <h5 class="custom-modal-title">Confirm Delete</h5>
                                                    <button type="button" class="custom-modal-close">&times;</button>
                                                </div>
                                                <div class="custom-modal-body">
                                                    Are you sure you want to delete this contact ({{ $contact->name }})?
                                                </div>
                                                <div class="custom-modal-footer">
                                                    <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="custom-modal-btn custom-modal-btn-danger">Yes, Delete</button>
                                                        <button type="button" class="custom-modal-btn custom-modal-btn-secondary" 
                                                            onclick="document.getElementById('customDeleteModal{{ $contact->id }}').classList.remove('show'); document.body.style.overflow = ''">
                                                            Cancel
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </td>



                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="pagination">
                    {{ $contacts->links() }}
                </div>
               
            @endif
        </div>


    </main>
    <footer>
        <!-- Footer -->
        <div class="copyright_section">
            <div class="container">
                <p class="copyright_text">2025 All Rights Reserved. © Development by <a
                        href="https://github.com/Sami-AL-njadat"> SAM 95 NJT</a> </p>
            </div>
        </div>
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

 
<script src="{{ asset('js/modeljscustom.js') }}"></script>
 

</body>


 
 
</body>

</html>

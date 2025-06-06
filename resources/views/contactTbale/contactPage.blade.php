<!doctype html>
<html lang="en">

<head>
    <title>Contacts chicago Sam Ice Cream Truck</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
 
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">


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
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#messageModal{{ $contact->id }}">
                                           message
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="messageModal{{ $contact->id }}" tabindex="-1"
                                            aria-labelledby="messageModalLabel{{ $contact->id }}" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title"
                                                            id="messageModalLabel{{ $contact->id }}">Message from
                                                            {{ $contact->name }}</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        {{ $contact->message }}
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>




                                    <td>
                                        <!-- Delete Button Triggering Modal -->
                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#deleteModal{{ $contact->id }}">
                                            Delete
                                        </button>

                                        <!-- Delete Modal -->
                                        <div class="modal fade" id="deleteModal{{ $contact->id }}" tabindex="-1"
                                            aria-labelledby="deleteModalLabel{{ $contact->id }}" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title"
                                                            id="deleteModalLabel{{ $contact->id }}">Confirm Delete
                                                        </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Are you sure you want to delete this contact
                                                        ({{ $contact->name }})?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <form action="{{ route('contacts.destroy', $contact->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">Yes,
                                                                Delete</button>
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Cancel</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>



                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Pagination Links -->
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>

 
 
</body>

</html>

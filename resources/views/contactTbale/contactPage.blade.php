<!doctype html>
<html lang="en">

<head>
    <title>Contacts</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/contact.css') }}">
    <!-- Responsive -->

    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}"> --}}
    <!-- Responsive-->
    {{-- <link rel="stylesheet" href="{{ asset('css/responsive.css') }}"> --}}
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/logo2.ico') }}" type="image/x-icon" />

    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">


</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <a class="navbar-brand" href="{{ url('/sam-ice-creem-truck') }}">
            <img style="width: 71px; height: 89px;" src="{{ asset('images/logo2.png') }}"
                alt="Logo sam ice cream truck">
        </a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">


            <ul class="navbar-nav mx-auto text-center">
                <li class="nav-item active">
                    <a class="btn btn-success m-2 " style="color: white" href="{{ '/sam-ice-creem-truck' }}">Home
                        <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                        @csrf
                        <button type="submit" class="btn btn-danger  m-2">Logout</button>
                    </form>
                </li>


            </ul>

        </div>
    </nav>

    <div   class="container limits">
        <h2>Contacts</h2>

        @if ($contacts->isEmpty())
  <div class="alert alert-info mt-4">
        No one has contacted Sam's Ice Cream Truck yet 🍦.
    </div>           @else
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
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->phone }}</td>
                                <td>{{ $contact->message }}</td>
                                <td>
                                    <button class="btn btn-danger"
                                        onclick="showDeleteConfirmation({{ $contact->id }})">Delete</button>
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

    <!-- Delete Confirmation Modal -->
    <div id="deleteModal" class="modal" style="display: none;">
        <div class="modal-content">
            <span class="close" onclick="closeDeleteModal()">&times;</span>
            <h3>Are you sure you want to delete this contact?</h3>
            <form id="deleteForm" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Yes, Delete</button>
                <button type="button" class="btn btn-secondary" onclick="closeDeleteModal()">Cancel</button>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <div class="copyright_section">
        <div class="container">
            <p class="copyright_text">2025 All Rights Reserved. © Development by <a
                    href="https://github.com/Sami-AL-njadat"> SAM 95 NJT</a> </p>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            window.showDeleteConfirmation = function(contactId) {
                var modal = document.getElementById("deleteModal");
                modal.style.display = "block";

                var deleteForm = document.getElementById("deleteForm");
                deleteForm.action = "/contacts/" + contactId;
            }

            window.closeDeleteModal = function() {
                var modal = document.getElementById("deleteModal");
                modal.style.display = "none";
            }

            window.onclick = function(event) {
                var modal = document.getElementById("deleteModal");
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        });
    </script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>

    @include('admin.css')
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('admin.sidebare')

        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar    le navbar-->

                @include('admin.navbar')
                <!-- End of Topbar -->
                <div class="container">


                    <div class="container">
                        <h1 style="text-align: center;font-weight:700">Espace de Gestion des Professeurs</h1>
                        @if(session('success'))
                        <div class="alert alert-success">
                            {{session('success')}}
                        </div>

                        @endif
                    </div>
                    <div class="container">


                        <div class="container">

                            <div class="card o-hidden border-0 shadow-lg my-1">
                                <div class="card-body p-0">

                                    <div class="container">
                                        <marquee behavior="" direction=""><h1 style="color: green;font-weight:700; font-family:Georgia, 'Times New Roman', Times, serif">Espace d'ajouts de professeurs</h1></marquee>
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead >
                                                <tr>
                                                    <th>Nom</th>
                                                    <th>Téléphone</th>
                                                    <th>Email</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>

                                            <h1>Détails du professeur</h1>
                                            @foreach ($teacher as $teacher)
    <p><strong>Nom :</strong> {{ $teacher->name }}</p>
    <p><strong>Email :</strong> {{ $teacher->email }}</p>
    <p><strong>Téléphone :</strong> {{ $teacher->phone }}</p>
    <a href="{{ route('admin.teachers.index') }}" class="btn btn-primary">Retour à la liste</a>
    @endforeach
                                            <tbody>
                                                
                                              
                                                     
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </div>

                                </div>

                            </div>

                            <hr>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    </div>



    <!-- Begin Page Content -->
    <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->

    @include('admin.script')
</body>

</html>
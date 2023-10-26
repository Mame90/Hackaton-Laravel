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
                                            <tbody>
                                                @foreach ($teachers as $teacher)
                                                <tr >
                                                    <td>{{ $teacher->name }}</td>
                                                    <td>{{ $teacher->phone }}</td>
                                                    <td>{{ $teacher->email }}</td>
                                                    <td style="width: auto">

                                                        </a>
                                                        <a href="#" class="btn btn-warning mr-1" title="Éditer le produit">
                                                            <i class="fas fa-eye">Voir</i>
                                                        </a>


                                                        <a href="#" class="btn btn-primary mr-1" title="modifier le produit">
                                                            <i class="fas fa-edit">modifier</i>
                                                        </a>

                                                        
                                                        <a href="#" class="btn btn-danger mr-1" title="supprimer le produit">
                                                        <i class="fa fa-trash">Supprimer</i> 
                                                        </a>


                                                        <!-- <a href="{{ route('admin.teachers.show', $teacher->id) }}" class="btn btn-warning mr-1" title="Éditer le produit">
                                                            <i class="fas fa-eye">Voir</i>
                                                        </a>


                                                        <a href="{{ route('admin.teachers.edit', $teacher->id) }}" class="btn btn-primary mr-1" title="modifier le produit">
                                                            <i class="fas fa-edit">modifier</i>
                                                        </a>

                                                        
                                                        <a href="{{ route('admin.teachers.destroy', $teacher->id) }}" class="btn btn-danger mr-1" title="supprimer le produit">
                                                        <i class="fa fa-trash">Supprimer</i> 
                                                        </a>
 -->
                                                     
                                                </tr>
                                                @endforeach
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
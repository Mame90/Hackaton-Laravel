


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
    <h1>Espace de Gestion des Professeurs</h1>
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
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-lg-5 d-none d-lg-block">
        <img src="assets\img\pro.jpg" alt="" width="100%" height="100%">
        </div>
            <div class="col-lg-7">
                <div class="p-1">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Ajouter un Professeur!</h1>
                    </div>
                    <form action="{{ route('admin.Teacher.store') }}" method="POST" class="user">
    @csrf
                    
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                    placeholder="Prenom et Nom de l'Enseignant" name="name">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control form-control-user" id="exampleLastName"
                                    placeholder="Veiller entrer les Infos du Professeur" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                placeholder="Votre adressse email" name="email">
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="number" class="form-control form-control-user"
                                    id="exampleInputPassword" placeholder="Téléphone" name="phone">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control form-control-user"
                                    id="exampleRepeatPassword" placeholder="Veillez  fournir le telephone du l'Enseignant" disabled>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-user btn-block">Enregistrer</button>
                        
                        <hr>
                       
                    </form>
                    <hr>
                    
                </div>
            </div>
        </div>
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
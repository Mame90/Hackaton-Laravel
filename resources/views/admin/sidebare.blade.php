<ul class="navbar-nav  sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: green;">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
    <div class="sidebar-brand-icon">
    <i class="fa fa-user-circle" aria-hidden="true"></i> <!-- Icône utilisateur par défaut -->
    </div>
</a>
<div class="sidebar-brand d-flex align-items-center justify-content-center mt-0">
        <!-- Affichez le nom de l'administrateur ici -->
        <strong>{{ Auth::user()->name }}</strong>
    </div>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="/administrator">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">

</div>


<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <!-- <i class="fa-light fa-bars" style="color: #e2e614;"></i> -->
        <span style="font-size: 18px; font-weight:700; color:bolder" href="#"><i class="fas fa-user"></i>Gestion Utilisateur</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <!-- <a class="collapse-item" href="{{route('commandes.index')}}">listes utilisateurs</a> -->
            <a class="collapse-item" href="{{url('adminproduit')}}">Gestion des Eleves</a>
            <a class="collapse-item" href="{{route('admin.teachers.index')}}">Listes des Professeurs</a>
            <!-- <a class="collapse-item" href="{{route('admin.teacher.ajouter')}}">Ajouter un Professeur</a> -->
            
        <!--    <a class="collapse-item" href="#">Listes des Professeurs</a>
            <a class="collapse-item" href="#">Listes des Professeurs</a> -->
        </div>
    </div>
</li>
<hr class="sidebar-divider my-0">

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
        aria-expanded="true" aria-controls="collapseUtilities">
        <!-- <i class="fas fa-fw fa-wrench"></i> -->
        <span style="font-size: 18px; font-weight:700; color:bolder" > <i class="fa fa-bars" aria-hidden="true"></i>Getion Cours</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Cours & Planing</h6> 
            <a class="collapse-item" href="#">Listes des Cours</a>
            <a class="collapse-item" href="{{route('admin.teacher.ajoutercours')}}">Ajouter Cours</a>
            <a class="collapse-item" href="#">Voir le Planning</a>
            
            <!-- <a class="collapse-item" href="{{url('adminproduit')}}">Afficher Liste Produit</a> -->
            
        </div>
    </div>

    
</li>

<hr class="sidebar-divider my-0">

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
        aria-expanded="true" aria-controls="collapseUtilities">
        <!-- <i class="fas fa-fw fa-wrench"></i> -->
        <span style="font-size: 18px; font-weight:700; color:bolder" > <i class="fa fa-cogs" aria-hidden="true"></i></i>Generale setting</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
         </div>

    
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
        aria-expanded="true" aria-controls="collapseUtilities">
        <!-- <i class="fas fa-fw fa-wrench"></i> -->
        <span style="font-size: 18px; font-weight:700; color:bolder" ><i class="fa fa-cog" aria-hidden="true"></i>Module seetting</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
         </div>

    
</li>

<hr class="sidebar-divider my-0">


</ul>

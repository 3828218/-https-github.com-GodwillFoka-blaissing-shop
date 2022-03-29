<li class="nav-item has-treeview">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
            Produits
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ url('admin/produit/create') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Ajouter Produit</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('admin/produit') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Liste Produits</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item has-treeview">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
            Utilisateurs
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ url('admin/user/create') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Ajouter Utilisatuer</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('admin/user') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Liste Utilisateur</p>
            </a>
        </li>
    </ul>
</li>

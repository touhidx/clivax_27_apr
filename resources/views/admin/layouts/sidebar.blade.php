<div class="sidebar-left">
    <div data-simplebar class="h-100">

        <!--- Sidebar-menu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="left-menu list-unstyled" id="side-menu">
                <li>
                    <a href="index.html" class="">
                        <i class="fas fa-desktop"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="menu-title">Elements</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow ">
                        <i class="fa fa-palette"></i>
                        <span>Categories</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('category.create')}}"><i class="mdi mdi-checkbox-blank-circle align-middle"></i>Category Create</a></li>
                        <li><a href="{{route('category.show')}}"><i class="mdi mdi-checkbox-blank-circle align-middle"></i>Category List</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow ">
                        <i class="fa fa-adjust"></i>
                        <span>Blog</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('blog.create')}}"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Blog Create</a></li>
                        <li><a href="{{route('blog.list')}}"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Blog list</a></li>
                    </ul>
                </li>

                <li>
                    <a href="apps-chat.html" class="">
                        <i class="fas fa-comment"></i>
                        <span>Comment</span>
                    </a>
                </li>

                <li>
                    <a href="apps-contact.html" class="">
                        <i class="fas fa-id-badge"></i>
                        <span>Contacts</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
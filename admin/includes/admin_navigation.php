        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Portfolio Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                
<!--                <li><a href="../index.php" >HOME SITE</a></li>         -->
                <li><a href="../index.php" class="btn btn-default btn-dm">
                    <span class="glyphicon glyphicon-home"></span> HOME SITE</a></li>
                
                
                
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Horayra <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
<!--
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
-->
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->           
            
            
            
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="">
                        <a href="view_contact.php"><i class="fa fa-fw fa-file"></i> Contact </a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Users <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="view_user.php">View User</a>
                            </li>
                            <li>
                                <a href="add_user.php">Add User</a>
                            </li>
                        </ul>
                    </li>
                    
<!--
                     <li>
                        <a href="./categories.php"><i class="fa fa-fw fa-wrench"></i> Skills </a>
                    </li>
-->
                    
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#posts_dropdown"><i class="fa fa-fw fa-arrows-v"></i> Projects <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="posts_dropdown" class="collapse">
                            <li>
                                <a href="view_project.php">View All Project</a>
                            </li>
                            <li>
                                <a href="add_project.php">Add Project</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#posts_dropdown2"><i class="fa fa-fw fa-wrench"></i> Skills <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="posts_dropdown2" class="collapse">
                            <li>
                                <a href="view_skill.php">View Skill</a>
                            </li>
                            <li>
                                <a href="add_skill.php">Add Skill</a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
            <?= $this->Html->css(['navbar']) ?>
            <nav class="nav">
                <div class="nav-main">
                    <ul class="nav-links">
                        <li class="nav-link">
                        </li>
                        <li class="nav-link">
                        </li>
                        <li class="nav-link">
                        </li>
                    </ul>
                </div>

                <div class="cta">
                    <li class="nav-link dropdown"><a href="" class="dropdown">Profile <i class="bi bi-chevron-compact-down"></i></a>
                        <ul class="dropdown-list">
                            <?php if (!empty($loginUser)) { ?>
                                <li class="nav-link">
                                    <?= $this->Html->link(__('Logout'), ['controller' => 'users', 'action' => 'logout']) ?>
                                </li>
                            <?php } else { ?>
                                <li class="nav-link">
                                    <?= $this->Html->link(('Register'), ['controller' => 'users', 'action' => 'signup']) ?>
                                </li>
                                <li class="nav-link">
                                    <?= $this->Html->link(__('Login'), ['controller' => 'users', 'action' => 'user_login']) ?>
                                </li>
                            <?php } ?>
                        </ul>
                    </li>
                </div>
            </nav>
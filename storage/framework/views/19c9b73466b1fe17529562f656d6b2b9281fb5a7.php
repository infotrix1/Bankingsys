<div class="sidebar <?php echo e(sidebarVariation()['selector']); ?> <?php echo e(sidebarVariation()['sidebar']); ?> <?php echo e(@sidebarVariation()['overlay']); ?> <?php echo e(@sidebarVariation()['opacity']); ?>"
     data-background="<?php echo e(getImage('assets/admin/images/sidebar/2.jpg','400x800')); ?>">
    <button class="res-sidebar-close-btn"><i class="las la-times"></i></button>
    <div class="sidebar__inner">
        <div class="sidebar__logo">
            <a href="<?php echo e(route('admin.dashboard')); ?>" class="sidebar__main-logo"><img
                    src="<?php echo e(getImage(imagePath()['logoIcon']['path'] .'/logo.png')); ?>" alt="<?php echo app('translator')->get('image'); ?>"></a>
            <a href="<?php echo e(route('admin.dashboard')); ?>" class="sidebar__logo-shape"><img
                    src="<?php echo e(getImage(imagePath()['logoIcon']['path'] .'/favicon.png')); ?>" alt="<?php echo app('translator')->get('image'); ?>"></a>
            <button type="button" class="navbar__expand"></button>
        </div>

        <div class="sidebar__menu-wrapper" id="sidebar__menuWrapper">
            <ul class="sidebar__menu">
                <li class="sidebar-menu-item <?php echo e(menuActive('admin.dashboard')); ?>">
                    <a href="<?php echo e(route('admin.dashboard')); ?>" class="nav-link ">
                        <i class="menu-icon las la-home"></i>
                        <span class="menu-title"><?php echo app('translator')->get('Dashboard'); ?></span>
                    </a>
                </li>

                <li class="sidebar-menu-item sidebar-dropdown">
                    <a href="javascript:void(0)" class="<?php echo e(menuActive('admin.users*',3)); ?>">
                        <i class="menu-icon las la-users"></i>
                        <span class="menu-title"><?php echo app('translator')->get('Manage Users'); ?></span>

                        <?php if($banned_users_count > 0 || $email_unverified_users_count > 0 || $sms_unverified_users_count > 0): ?>
                            <span class="menu-badge pill bg--primary ml-auto">
                                <i class="fa fa-exclamation"></i>
                            </span>
                        <?php endif; ?>
                    </a>
                    <div class="sidebar-submenu <?php echo e(menuActive('admin.users*',2)); ?> ">
                        <ul>
                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.users.all')); ?> ">
                                <a href="<?php echo e(route('admin.users.all')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('All Users'); ?></span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.users.active')); ?> ">
                                <a href="<?php echo e(route('admin.users.active')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Active Users'); ?></span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.users.banned')); ?> ">
                                <a href="<?php echo e(route('admin.users.banned')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Banned Users'); ?></span>
                                    <?php if($banned_users_count): ?>
                                        <span class="menu-badge pill bg--primary ml-auto"><?php echo e($banned_users_count); ?></span>
                                    <?php endif; ?>
                                </a>
                            </li>

                            <li class="sidebar-menu-item  <?php echo e(menuActive('admin.users.email.unverified')); ?>">
                                <a href="<?php echo e(route('admin.users.email.unverified')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Email Unverified'); ?></span>

                                    <?php if($email_unverified_users_count): ?>
                                        <span
                                            class="menu-badge pill bg--primary ml-auto"><?php echo e($email_unverified_users_count); ?></span>
                                    <?php endif; ?>
                                </a>
                            </li>

                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.users.sms.unverified')); ?>">
                                <a href="<?php echo e(route('admin.users.sms.unverified')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('SMS Unverified'); ?></span>
                                    <?php if($sms_unverified_users_count): ?>
                                        <span
                                            class="menu-badge pill bg--primary ml-auto"><?php echo e($sms_unverified_users_count); ?></span>
                                    <?php endif; ?>
                                </a>
                            </li>

                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.users.with.balance')); ?>">
                                <a href="<?php echo e(route('admin.users.with.balance')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('With Balance'); ?></span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.users.kyc.awaiting')); ?>">
                                <a href="<?php echo e(route('admin.users.kyc.awaiting')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('KYC Submitted'); ?></span>
                                    <?php if($awaiting_kyc_verification): ?>
                                        <span class="menu-badge pill bg--primary ml-auto"><?php echo e($awaiting_kyc_verification); ?></span>
                                    <?php endif; ?>
                                </a>
                            </li>


                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.users.email.all')); ?>">
                                <a href="<?php echo e(route('admin.users.email.all')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Email to All'); ?></span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>

                <li class="sidebar-menu-item <?php echo e(menuActive('admin.referral.index')); ?>">
                    <a href="<?php echo e(route('admin.referral.index')); ?>" class="nav-link ">
                        <i class="menu-icon las la-sitemap"></i>
                        <span class="menu-title"><?php echo app('translator')->get('Manage Referral'); ?></span>
                    </a>
                </li>



                <li class="sidebar-menu-item sidebar-dropdown">
                    <a href="javascript:void(0)" class="<?php echo e(menuActive('admin.loan*',3)); ?>">
                        <i class="menu-icon las la-hand-holding-usd"></i>
                        <span class="menu-title"><?php echo app('translator')->get('Loan Management'); ?></span>

                        <?php if($pending_loan_count || $due_loan_count): ?>
                            <span class="menu-badge pill bg--primary ml-auto">
                                <i class="fa fa-exclamation"></i>
                            </span>
                        <?php endif; ?>
                    </a>

                    <div class="sidebar-submenu <?php echo e(menuActive('admin.loan*',2)); ?> ">
                        <ul>
                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.loan.plan*')); ?>">
                                <a href="<?php echo e(route('admin.loan.plan.index')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Loan Plans'); ?></span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.loan.index')); ?>">
                                <a href="<?php echo e(route('admin.loan.index')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('All Loans'); ?></span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.loan.pending')); ?>">
                                <a href="<?php echo e(route('admin.loan.pending')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Pending Loan'); ?></span>
                                    <?php if($pending_loan_count): ?>
                                        <span class="menu-badge pill bg--primary ml-auto"><?php echo e($pending_loan_count); ?></span>
                                    <?php endif; ?>
                                </a>
                            </li>

                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.loan.running')); ?>">
                                <a href="<?php echo e(route('admin.loan.running')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Running Loan'); ?></span>
                                </a>
                            </li>


                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.loan.paid')); ?>">
                                <a href="<?php echo e(route('admin.loan.paid')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Paid Loan'); ?></span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.loan.rejected')); ?>">
                                <a href="<?php echo e(route('admin.loan.rejected')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Rejected Loan'); ?></span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.loan.due')); ?>">
                                <a href="<?php echo e(route('admin.loan.due')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Due Loan'); ?></span>
                                    <?php if($due_loan_count): ?>
                                        <span class="menu-badge pill bg--primary ml-auto"><?php echo e($due_loan_count); ?></span>
                                    <?php endif; ?>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>


                <li class="sidebar-menu-item sidebar-dropdown">
                    <a href="javascript:void(0)" class="<?php echo e(menuActive('admin.dps*',3)); ?>">
                        <i class="menu-icon las la-box"></i>
                        <span class="menu-title"><?php echo app('translator')->get('DPS Management'); ?> </span>
                        <?php if($due_dps_count): ?>
                            <span class="menu-badge pill bg--primary ml-auto">
                                <i class="fa fa-exclamation"></i>
                            </span>
                        <?php endif; ?>
                    </a>
                    <div class="sidebar-submenu <?php echo e(menuActive('admin.dps*',2)); ?> ">
                        <ul>
                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.dps.plan.index')); ?>">
                                <a href="<?php echo e(route('admin.dps.plan.index')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('DPS Plans'); ?></span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.dps.index')); ?>">
                                <a href="<?php echo e(route('admin.dps.index')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('All DPS'); ?></span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.dps.running')); ?>">
                                <a href="<?php echo e(route('admin.dps.running')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Running DPS'); ?></span>
                                </a>
                            </li>


                            <li class="sidebar-menu-item <?php echo e(menuActive(['admin.dps.matured'])); ?>">
                                <a href="<?php echo e(route('admin.dps.matured')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Matured DPS'); ?></span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.dps.due')); ?>">
                                <a href="<?php echo e(route('admin.dps.due')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Due DPS'); ?></span>

                                    <?php if($due_dps_count): ?>
                                        <span class="menu-badge pill bg--primary ml-auto"><?php echo e($due_dps_count); ?></span>
                                    <?php endif; ?>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>



                <li class="sidebar-menu-item sidebar-dropdown">
                    <a href="javascript:void(0)" class="<?php echo e(menuActive('admin.fdr*',3)); ?>">
                        <i class="menu-icon las la-money-bill"></i>
                        <span class="menu-title"><?php echo app('translator')->get('FDR Management'); ?> </span>

                        <?php if($due_fdr_count): ?>
                            <span class="menu-badge pill bg--primary ml-auto">
                                <i class="fa fa-exclamation"></i>
                            </span>
                        <?php endif; ?>
                    </a>
                    <div class="sidebar-submenu <?php echo e(menuActive('admin.fdr*',2)); ?> ">
                        <ul>
                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.fdr.plan.index')); ?>">
                                <a href="<?php echo e(route('admin.fdr.plan.index')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('FDR Plans'); ?></span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item <?php echo e(menuActive(['admin.fdr.index'])); ?>">
                                <a href="<?php echo e(route('admin.fdr.index')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('All FDR'); ?></span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item <?php echo e(menuActive(['admin.fdr.running'])); ?>">
                                <a href="<?php echo e(route('admin.fdr.running')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Running FDR'); ?></span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item <?php echo e(menuActive(['admin.fdr.closed'])); ?>">
                                <a href="<?php echo e(route('admin.fdr.closed')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Closed FDR'); ?></span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.fdr.due')); ?>">
                                <a href="<?php echo e(route('admin.fdr.due')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Due FDR'); ?></span>

                                    <?php if($due_fdr_count): ?>
                                        <span class="menu-badge pill bg--primary ml-auto"><?php echo e($due_fdr_count); ?></span>
                                    <?php endif; ?>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>

                <li class="sidebar-menu-item <?php echo e(menuActive('admin.bank.*')); ?>">
                    <a href="<?php echo e(route('admin.bank.index')); ?>" class="nav-link">
                        <i class="menu-icon la la-bank"></i>
                        <span class="menu-title"><?php echo app('translator')->get('Other Banks'); ?></span>
                    </a>
                </li>

                <li class="sidebar-menu-item sidebar-dropdown">
                    <a href="javascript:void(0)" class="<?php echo e(menuActive('admin.transfer*',3)); ?>">
                        <i class="menu-icon las la-hand-holding-usd"></i>
                        <span class="menu-title"><?php echo app('translator')->get('Money Transfer'); ?> </span>
                        <?php if($pending_transfer_count): ?>
                            <span class="menu-badge pill bg--primary ml-auto">
                                <i class="fa fa-exclamation"></i>
                            </span>
                        <?php endif; ?>
                    </a>

                    <div class="sidebar-submenu <?php echo e(menuActive('admin.transfer*',2)); ?> ">
                        <ul>
                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.transfers.pending')); ?>">
                                <a href="<?php echo e(route('admin.transfers.pending')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Pending Transfers'); ?></span>
                                    <?php if($pending_transfer_count): ?>
                                        <span class="menu-badge pill bg--primary ml-auto"><?php echo e($pending_transfer_count); ?></span>
                                    <?php endif; ?>
                                </a>
                            </li>

                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.transfers.rejected')); ?>">
                                <a href="<?php echo e(route('admin.transfers.rejected')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Rejected Transfers'); ?></span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.transfers.own')); ?>">
                                <a href="<?php echo e(route('admin.transfers.own')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Own Bank Transfers'); ?></span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.transfers.other')); ?>">
                                <a href="<?php echo e(route('admin.transfers.other')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Other Bank Transfers'); ?></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="sidebar-menu-item sidebar-dropdown">
                    <a href="javascript:void(0)" class="<?php echo e(menuActive('admin.gateway*',3)); ?>">
                        <i class="menu-icon las la-credit-card"></i>
                        <span class="menu-title"><?php echo app('translator')->get('Payment Gateways'); ?></span>

                    </a>
                    <div class="sidebar-submenu <?php echo e(menuActive('admin.gateway*',2)); ?> ">
                        <ul>

                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.gateway.automatic.index')); ?> ">
                                <a href="<?php echo e(route('admin.gateway.automatic.index')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Automatic Gateways'); ?></span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.gateway.manual.index')); ?> ">
                                <a href="<?php echo e(route('admin.gateway.manual.index')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Manual Gateways'); ?></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>


                <li class="sidebar-menu-item sidebar-dropdown">
                    <a href="javascript:void(0)" class="<?php echo e(menuActive('admin.deposit*',3)); ?>">
                        <i class="menu-icon las la-credit-card"></i>
                        <span class="menu-title"><?php echo app('translator')->get('Deposits'); ?></span>
                        <?php if(0 < $pending_deposits_count): ?>
                            <span class="menu-badge pill bg--primary ml-auto">
                                <i class="fa fa-exclamation"></i>
                            </span>
                        <?php endif; ?>
                    </a>
                    <div class="sidebar-submenu <?php echo e(menuActive('admin.deposit*',2)); ?> ">
                        <ul>

                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.deposit.pending')); ?> ">
                                <a href="<?php echo e(route('admin.deposit.pending')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Pending Deposits'); ?></span>
                                    <?php if($pending_deposits_count): ?>
                                        <span class="menu-badge pill bg--primary ml-auto"><?php echo e($pending_deposits_count); ?></span>
                                    <?php endif; ?>
                                </a>
                            </li>

                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.deposit.approved')); ?> ">
                                <a href="<?php echo e(route('admin.deposit.approved')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Approved Deposits'); ?></span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.deposit.successful')); ?> ">
                                <a href="<?php echo e(route('admin.deposit.successful')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Successful Deposits'); ?></span>
                                </a>
                            </li>


                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.deposit.rejected')); ?> ">
                                <a href="<?php echo e(route('admin.deposit.rejected')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Rejected Deposits'); ?></span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.deposit.list')); ?> ">
                                <a href="<?php echo e(route('admin.deposit.list')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('All Deposits'); ?></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="sidebar-menu-item sidebar-dropdown">
                    <a href="javascript:void(0)" class="<?php echo e(menuActive('admin.withdraw*',3)); ?>">
                        <i class="menu-icon la la-money-bill-wave"></i>
                        <span class="menu-title"><?php echo app('translator')->get('Withdrawals'); ?> </span>

                        <?php if(0 < $pending_withdraw_count): ?>
                            <span class="menu-badge pill bg--primary ml-auto">
                                <i class="fa fa-exclamation"></i>
                            </span>
                        <?php endif; ?>
                    </a>
                    <div class="sidebar-submenu <?php echo e(menuActive('admin.withdraw*',2)); ?> ">
                        <ul>

                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.withdraw.method.index')); ?>">
                                <a href="<?php echo e(route('admin.withdraw.method.index')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Withdrawal Methods'); ?></span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.withdraw.pending')); ?> ">
                                <a href="<?php echo e(route('admin.withdraw.pending')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Pending Log'); ?></span>

                                    <?php if($pending_withdraw_count): ?>
                                        <span class="menu-badge pill bg--primary ml-auto"><?php echo e($pending_withdraw_count); ?></span>
                                    <?php endif; ?>
                                </a>
                            </li>

                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.withdraw.approved')); ?> ">
                                <a href="<?php echo e(route('admin.withdraw.approved')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Approved Log'); ?></span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.withdraw.rejected')); ?> ">
                                <a href="<?php echo e(route('admin.withdraw.rejected')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Rejected Log'); ?></span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.withdraw.log')); ?> ">
                                <a href="<?php echo e(route('admin.withdraw.log')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Withdrawals Log'); ?></span>
                                </a>
                            </li>


                        </ul>
                    </div>
                </li>

                <li class="sidebar-menu-item sidebar-dropdown">
                    <a href="javascript:void(0)" class="<?php echo e(menuActive('admin.ticket*',3)); ?>">
                        <i class="menu-icon la la-ticket"></i>
                        <span class="menu-title"><?php echo app('translator')->get('Support Ticket'); ?> </span>
                        <?php if(0 < $pending_ticket_count): ?>
                            <span class="menu-badge pill bg--primary ml-auto">
                                <i class="fa fa-exclamation"></i>
                            </span>
                        <?php endif; ?>
                    </a>
                    <div class="sidebar-submenu <?php echo e(menuActive('admin.ticket*',2)); ?> ">
                        <ul>

                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.ticket')); ?> ">
                                <a href="<?php echo e(route('admin.ticket')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('All Ticket'); ?></span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.ticket.pending')); ?> ">
                                <a href="<?php echo e(route('admin.ticket.pending')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Pending Ticket'); ?></span>
                                    <?php if($pending_ticket_count): ?>
                                        <span
                                            class="menu-badge pill bg--primary ml-auto"><?php echo e($pending_ticket_count); ?></span>
                                    <?php endif; ?>
                                </a>
                            </li>
                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.ticket.closed')); ?> ">
                                <a href="<?php echo e(route('admin.ticket.closed')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Closed Ticket'); ?></span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.ticket.answered')); ?> ">
                                <a href="<?php echo e(route('admin.ticket.answered')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Answered Ticket'); ?></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>


                <li class="sidebar-menu-item sidebar-dropdown">
                    <a href="javascript:void(0)" class="<?php echo e(menuActive('admin.report*',3)); ?>">
                        <i class="menu-icon la la-list"></i>
                        <span class="menu-title"><?php echo app('translator')->get('Report'); ?> </span>
                    </a>
                    <div class="sidebar-submenu <?php echo e(menuActive('admin.report*',2)); ?> ">
                        <ul>

                            <li class="sidebar-menu-item <?php echo e(menuActive(['admin.report.commission','admin.report.commission.search'])); ?>">
                                <a href="<?php echo e(route('admin.report.commission')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Commission Log'); ?></span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item <?php echo e(menuActive(['admin.report.transaction','admin.report.transaction.search'])); ?>">
                                <a href="<?php echo e(route('admin.report.transaction')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Transaction Log'); ?></span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item <?php echo e(menuActive(['admin.report.login.history','admin.report.login.ipHistory'])); ?>">
                                <a href="<?php echo e(route('admin.report.login.history')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Login History'); ?></span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.report.email.history')); ?>">
                                <a href="<?php echo e(route('admin.report.email.history')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Email History'); ?></span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>


                <li class="sidebar-menu-item  <?php echo e(menuActive('admin.subscriber.index')); ?>">
                    <a href="<?php echo e(route('admin.subscriber.index')); ?>" class="nav-link"
                       data-default-url="<?php echo e(route('admin.subscriber.index')); ?>">
                        <i class="menu-icon las la-thumbs-up"></i>
                        <span class="menu-title"><?php echo app('translator')->get('Subscribers'); ?> </span>
                    </a>
                </li>


                <li class="sidebar__menu-header"><?php echo app('translator')->get('Settings'); ?></li>

                <li class="sidebar-menu-item <?php echo e(menuActive('admin.setting.general')); ?>">
                    <a href="<?php echo e(route('admin.setting.general')); ?>" class="nav-link">
                        <i class="menu-icon las la-life-ring"></i>
                        <span class="menu-title"><?php echo app('translator')->get('General'); ?></span>
                    </a>
                </li>

                <li class="sidebar-menu-item <?php echo e(menuActive('admin.setting.system')); ?>">
                    <a href="<?php echo e(route('admin.setting.system')); ?>" class="nav-link">
                        <i class="menu-icon las la-tools"></i>
                        <span class="menu-title"><?php echo app('translator')->get('System'); ?></span>
                    </a>
                </li>

                <li class="sidebar-menu-item <?php echo e(menuActive('admin.setting.logo.icon')); ?>">
                    <a href="<?php echo e(route('admin.setting.logo.icon')); ?>" class="nav-link">
                        <i class="menu-icon las la-images"></i>
                        <span class="menu-title"><?php echo app('translator')->get('Logo & Favicon'); ?></span>
                    </a>
                </li>

                <li class="sidebar-menu-item <?php echo e(menuActive('admin.setting.kyc')); ?>">
                    <a href="<?php echo e(route('admin.setting.kyc')); ?>" class="nav-link ">
                        <i class="menu-icon las la-sticky-note"></i>
                        <span class="menu-title"><?php echo app('translator')->get('Kyc Form'); ?></span>
                    </a>
                </li>

                <li class="sidebar-menu-item <?php echo e(menuActive('admin.extensions.index')); ?>">
                    <a href="<?php echo e(route('admin.extensions.index')); ?>" class="nav-link">
                        <i class="menu-icon las la-cogs"></i>
                        <span class="menu-title"><?php echo app('translator')->get('Extensions'); ?></span>
                    </a>
                </li>

                <li class="sidebar-menu-item  <?php echo e(menuActive(['admin.language.manage','admin.language.key'])); ?>">
                    <a href="<?php echo e(route('admin.language.manage')); ?>" class="nav-link"
                       data-default-url="<?php echo e(route('admin.language.manage')); ?>">
                        <i class="menu-icon las la-language"></i>
                        <span class="menu-title"><?php echo app('translator')->get('Language'); ?> </span>
                    </a>
                </li>

                <li class="sidebar-menu-item <?php echo e(menuActive('admin.seo')); ?>">
                    <a href="<?php echo e(route('admin.seo')); ?>" class="nav-link">
                        <i class="menu-icon las la-globe"></i>
                        <span class="menu-title"><?php echo app('translator')->get('SEO Manager'); ?></span>
                    </a>
                </li>

                <li class="sidebar-menu-item sidebar-dropdown">
                    <a href="javascript:void(0)" class="<?php echo e(menuActive('admin.email.template*',3)); ?>">
                        <i class="menu-icon la la-envelope-o"></i>
                        <span class="menu-title"><?php echo app('translator')->get('Email Manager'); ?></span>
                    </a>
                    <div class="sidebar-submenu <?php echo e(menuActive('admin.email.template*',2)); ?> ">
                        <ul>

                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.email.template.global')); ?> ">
                                <a href="<?php echo e(route('admin.email.template.global')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Global Template'); ?></span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item <?php echo e(menuActive(['admin.email.template.index','admin.email.template.edit'])); ?> ">
                                <a href="<?php echo e(route('admin.email.template.index')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Email Templates'); ?></span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.email.template.setting')); ?> ">
                                <a href="<?php echo e(route('admin.email.template.setting')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Email Configure'); ?></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="sidebar-menu-item sidebar-dropdown">
                    <a href="javascript:void(0)" class="<?php echo e(menuActive('admin.sms.template*',3)); ?>">
                        <i class="menu-icon la la-mobile"></i>
                        <span class="menu-title"><?php echo app('translator')->get('SMS Manager'); ?></span>
                    </a>
                    <div class="sidebar-submenu <?php echo e(menuActive('admin.sms.template*',2)); ?> ">
                        <ul>
                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.sms.template.global')); ?> ">
                                <a href="<?php echo e(route('admin.sms.template.global')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Global Setting'); ?></span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.sms.templates.setting')); ?> ">
                                <a href="<?php echo e(route('admin.sms.templates.setting')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('SMS Gateways'); ?></span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item <?php echo e(menuActive(['admin.sms.template.index','admin.sms.template.edit'])); ?> ">
                                <a href="<?php echo e(route('admin.sms.template.index')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('SMS Templates'); ?></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="sidebar__menu-header"><?php echo app('translator')->get('Frontend Manager'); ?></li>

                <li class="sidebar-menu-item <?php echo e(menuActive('admin.frontend.templates')); ?>">
                    <a href="<?php echo e(route('admin.frontend.templates')); ?>" class="nav-link ">
                        <i class="menu-icon la la-html5"></i>
                        <span class="menu-title"><?php echo app('translator')->get('Manage Templates'); ?></span>
                    </a>
                </li>

                <li class="sidebar-menu-item <?php echo e(menuActive('admin.frontend.manage.pages')); ?>">
                    <a href="<?php echo e(route('admin.frontend.manage.pages')); ?>" class="nav-link ">
                        <i class="menu-icon la la-list"></i>
                        <span class="menu-title"><?php echo app('translator')->get('Manage Pages'); ?></span>
                    </a>
                </li>

                <li class="sidebar-menu-item sidebar-dropdown">
                    <a href="javascript:void(0)" class="<?php echo e(menuActive('admin.frontend.sections*',3)); ?>">
                        <i class="menu-icon la la-html5"></i>
                        <span class="menu-title"><?php echo app('translator')->get('Manage Section'); ?></span>
                    </a>
                    <div class="sidebar-submenu <?php echo e(menuActive('admin.frontend.sections*',2)); ?> ">
                        <ul>
                            <?php
                               $lastSegment =  collect(request()->segments())->last();
                            ?>
                            <?php $__currentLoopData = getPageSections(true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $secs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($secs['builder']): ?>
                                    <li class="sidebar-menu-item  <?php if($lastSegment == $k): ?> active <?php endif; ?> ">
                                        <a href="<?php echo e(route('admin.frontend.sections',$k)); ?>" class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title"><?php echo e(__($secs['name'])); ?></span>
                                        </a>
                                    </li>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                        </ul>
                    </div>
                </li>

                <li class="sidebar__menu-header"><?php echo app('translator')->get('Extra'); ?></li>


                <li class="sidebar-menu-item <?php echo e(menuActive('admin.setting.cookie')); ?>">
                    <a href="<?php echo e(route('admin.setting.cookie')); ?>" class="nav-link">
                        <i class="menu-icon las la-cookie-bite"></i>
                        <span class="menu-title"><?php echo app('translator')->get('GDPR Cookie'); ?></span>
                    </a>
                </li>

                <li class="sidebar-menu-item  <?php echo e(menuActive('admin.system.info')); ?>">
                    <a href="<?php echo e(route('admin.system.info')); ?>" class="nav-link"
                       data-default-url="<?php echo e(route('admin.system.info')); ?>">
                        <i class="menu-icon las la-server"></i>
                        <span class="menu-title"><?php echo app('translator')->get('System Information'); ?> </span>
                    </a>
                </li>

                <li class="sidebar-menu-item <?php echo e(menuActive('admin.setting.custom.css')); ?>">
                    <a href="<?php echo e(route('admin.setting.custom.css')); ?>" class="nav-link">
                        <i class="menu-icon lab la-css3-alt"></i>
                        <span class="menu-title"><?php echo app('translator')->get('Custom CSS'); ?></span>
                    </a>
                </li>

                <li class="sidebar-menu-item <?php echo e(menuActive('admin.setting.optimize')); ?>">
                    <a href="<?php echo e(route('admin.setting.optimize')); ?>" class="nav-link">
                        <i class="menu-icon las la-broom"></i>
                        <span class="menu-title"><?php echo app('translator')->get('Clear Cache'); ?></span>
                    </a>
                </li>

                <li class="sidebar-menu-item  <?php echo e(menuActive('admin.request.report')); ?>">
                    <a href="<?php echo e(route('admin.request.report')); ?>" class="nav-link"
                       data-default-url="<?php echo e(route('admin.request.report')); ?>">
                        <i class="menu-icon las la-bug"></i>
                        <span class="menu-title"><?php echo app('translator')->get('Report & Request'); ?> </span>
                    </a>
                </li>
            </ul>
            <div class="text-center mb-3 text-uppercase">
                <span class="text--primary"><?php echo e(__(systemDetails()['name'])); ?></span>
                <span class="text--success"><?php echo app('translator')->get('V'); ?><?php echo e(systemDetails()['version']); ?> </span>
            </div>
        </div>
    </div>
</div>
<!-- sidebar end -->
<?php /**PATH C:\wamp64\www\bankingsys\resources\views/partials/sidenav.blade.php ENDPATH**/ ?>
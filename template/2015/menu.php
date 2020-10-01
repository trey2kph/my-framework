                        <a href="<?php echo WEB; ?>"><div<?php if ($section == NULL) { ?> class="dselected"<?php } ?>>Home</div></a>
                        <a href="<?php echo WEB; ?>/menu"><div<?php if ($section == "menu") { ?> class="dselected"<?php } ?>>Menu</div></a>
                        <a href="<?php echo WEB; ?>/menu2"><div<?php if ($section == "menu2") { ?> class="dselected"<?php } ?>>Menu 2</div></a>
                        <?php if ($submenu || $submenu2) : ?>
                        <div id="subapp">
                        <div class="appsubmenu downshadow" style="display: none; z-index: 200;">
                            <?php if ($submenu) : ?><a href="<?php echo WEB; ?>/submenu"><div<?php if ($section == "submenu") { ?> class="dselected"<?php } ?>>Sub Menu</div></a><?php endif; ?>
                            <?php if ($submenu2) : ?><a href="<?php echo WEB; ?>/submenu2"><div<?php if ($section == "submenu2") { ?> class="dselected"<?php } ?>>Sub Menu 2</div></a><?php endif; ?>
                        </div>
                        <?php endif; ?>
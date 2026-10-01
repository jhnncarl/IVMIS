<?php
/**
 * IVMIS PORTAL FOOTER TEMPLATE
 * Closes main container, portal wrapper, adds mobile backdrop and includes portal JS.
 */
$basePath = (strpos($_SERVER['SCRIPT_NAME'], '/security/') !== false || strpos($_SERVER['SCRIPT_NAME'], '/admin/') !== false) ? '../' : '';
?>
            </main> <!-- End .portal-content-container -->

            <!-- Footer Note -->
            <footer style="padding: 1.25rem 1.75rem; background: #ffffff; border-top: 1px solid var(--border-color); color: var(--text-muted); font-size: 0.78rem; text-align: center;">
                <p>&copy; <?php echo date('Y'); ?> Eastern Visayas State University &mdash; Ormoc Campus. Intelligent Visitor Management Information System (IVMIS).</p>
            </footer>

        </div> <!-- End .portal-main -->

    </div> <!-- End .portal-wrapper -->

    <!-- Mobile Backdrop -->
    <div class="mobile-sidebar-backdrop" id="mobileSidebarBackdrop"></div>

    <!-- Portal JavaScript -->
    <script src="<?php echo $basePath; ?>assets/js/portal.js?v=<?php echo time(); ?>"></script>
</body>
</html>

<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="/dashboard/assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>@yield('title') | UT kota Kediri</title>

    <meta name="description" content="" />

   
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/dashboarda/assets/img/favicon/favicon.ico" />


<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.bootstrap5.min.css">
    <link rel="stylesheet" href="/dashboard/assets/vendor/fonts/boxicons.css" />
    <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

    <!-- Core CSS -->
    <link rel="stylesheet" href="/dashboard/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="/dashboard/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="/dashboard/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="/dashboard/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="/dashboard/assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->	<link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/46.1.1/ckeditor5.css">

    <!-- Helpers -->
    <script src="/dashboard/assets/vendor/js/helpers.js"></script>


{{-- Datatable --}}
<!-- DataTables Core -->

<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

<!-- Export Buttons -->
<script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.bootstrap5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.colVis.min.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="/dashboard/assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

       @include('components.navigation.dashboard.sidebar')
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->
            @include('components.navigation.dashboard.header')

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
                @yield('content')
            </div>
            <!-- / Content -->

            <!-- Footer -->
           @include('components.navigation.dashboard.footer')
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->



    <script src="/dashboard/assets/vendor/libs/popper/popper.js"></script>
    <script src="/dashboard/assets/vendor/js/bootstrap.js"></script>
    <script src="/dashboard/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

  <!-- Core -->
<!-- Core -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/trumbowyg@2.28.0/dist/ui/trumbowyg.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/trumbowyg@2.28.0/dist/trumbowyg.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/trumbowyg@2.28.0/dist/trumbowyg.pasteimage.min.js"></script>

<!-- Plugins -->
<script src="https://cdn.jsdelivr.net/npm/trumbowyg@2.28.0/dist/plugins/upload/trumbowyg.upload.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/trumbowyg@2.28.0/dist/plugins/base64/trumbowyg.base64.min.js"></script>

<!-- ✅ resizimg dep -->
<script src="//rawcdn.githack.com/RickStrahl/jquery-resizable/0.35/dist/jquery-resizable.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-resizable/0.35.0/jquery-resizable.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/trumbowyg@2.28.0/dist/plugins/resizimg/ui/trumbowyg.resizimg.css">
<script src="https://cdn.jsdelivr.net/npm/trumbowyg@2.28.0/dist/plugins/resizimg/trumbowyg.resizimg.min.js"></script>

<!-- Optional: colors, font, lineheight, table -->
<script src="https://cdn.jsdelivr.net/npm/trumbowyg@2.28.0/dist/plugins/colors/trumbowyg.colors.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/trumbowyg@2.28.0/dist/plugins/fontsize/trumbowyg.fontsize.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/trumbowyg@2.28.0/dist/plugins/fontfamily/trumbowyg.fontfamily.min.js">
</script>
<script src="https://cdn.jsdelivr.net/npm/trumbowyg@2.28.0/dist/plugins/lineheight/trumbowyg.lineheight.min.js">
</script>
<script src="https://cdn.jsdelivr.net/npm/trumbowyg@2.28.0/dist/plugins/table/trumbowyg.table.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/trumbowyg@2.28.0/dist/dist/plugins/table/trumbowyg.table.min.js"></script>


<script>
    $(document).ready(function() {
        $('#desc').trumbowyg({
            btnsDef: {
                // Image dropdown with multiple options
                image: {
                    dropdown: ['upload', 'base64'],
                    ico: 'insertImage'
                },
                // Custom color palette

            },
            btns: [
                ['viewHTML'],
                ['undo', 'redo'],
                ['formatting'],
                ['fontfamily', 'fontsize'],
                ['foreColor', 'backColor'],
                ['strong', 'em', 'del'],
                ['superscript', 'subscript'],
                ['link'],
                ['image'],
                ['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
                ['unorderedList', 'orderedList'],
                ['table'],
                ['horizontalRule'],
                ['lineheight'],
                ['removeformat'],
                ['fullscreen']
            ],
            plugins: {
                resizimg: {
                    minSize: 64, // min pixel
                    step: 16 // resize step
                },
                upload: {
                    serverPath: '/dashboards/upload',
                    fileFieldName: 'image',
                    urlPropertyName: 'file',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },

                }
            }
        });
    });
</script>



    <!-- build:js assets/vendor/js/core.js -->


    <script src="/dashboard/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="/dashboard/assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="/dashboard/assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="/dashboard/assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>

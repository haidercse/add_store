<!DOCTYPE html>
<html lang="bd">

<head>
    
    <meta name="csrf-token" content="MAk6qYgd4btlRkAg55eROuBAtib1FNSqxK75YVz0">
    <meta name="app-url" content="//sobkisubazar.com/">
    <meta name="file-base-url" content="//sobkisubazar.com/public/">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="description" content="Sob Kisu Bazar" />
    <meta name="keywords" content="Sob Kisu Bazar">


    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="SobKisuBazar">
    <meta itemprop="description" content="Sob Kisu Bazar">
    <meta itemprop="image"
        content="https://sobkisubazar.com/public/uploads/all/oOrpfxqbzvsL5wyuwxs5vAIuG0D8t6kdYrwZGU8F.png">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@publisher_handle">
    <meta name="twitter:title" content="SobKisuBazar">
    <meta name="twitter:description" content="Sob Kisu Bazar">
    <meta name="twitter:creator" content="@author_handle">
    <meta name="twitter:image"
        content="https://sobkisubazar.com/public/uploads/all/oOrpfxqbzvsL5wyuwxs5vAIuG0D8t6kdYrwZGU8F.png">

    <!-- Open Graph data -->
    <meta property="og:title" content="SobKisuBazar" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://sobkisubazar.com" />
    <meta property="og:image"
        content="https://sobkisubazar.com/public/uploads/all/oOrpfxqbzvsL5wyuwxs5vAIuG0D8t6kdYrwZGU8F.png" />
    <meta property="og:description" content="Sob Kisu Bazar" />
    <meta property="og:site_name" content="Sobkisubazar" />
    <meta property="fb:app_id" content="">
    <title>@yield('frontend_title')</title>
    @include('frontend.layouts.partials.styles')

    <script>
        var AIZ = AIZ || {};
        AIZ.local = {
            nothing_selected: 'Nothing selected',
            nothing_found: 'Nothing Found',
            choose_file: 'Choose File',
            file_selected: 'File selected',
            files_selected: 'Files selected',
            add_more_files: 'Add more files',
            adding_more_files: 'Adding more files',
            drop_files_here_paste_or: 'Drop files here, paste or',
            browse: 'Browse',
            upload_complete: 'Upload complete',
            upload_paused: 'Upload paused',
            resume_upload: 'Resume upload',
            pause_upload: 'Pause upload',
            retry_upload: 'Retry upload',
            cancel_upload: 'Cancel upload',
            uploading: 'Uploading',
            processing: 'Processing',
            complete: 'Complete',
            file: 'File',
            files: 'Files',
        }
    </script>

    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            font-weight: 400;
        }

        :root {
            --primary: #FF0000;
            --hov-primary: #FF0000;
            --soft-primary: ;
        }

        #map {
            width: 100%;
            height: 250px;
        }

        #edit_map {
            width: 100%;
            height: 250px;
        }

        .pac-container {
            z-index: 100000;
        }
    </style>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="frontend/https://www.googletagmanager.com/gtag/js?id=G-J1N2HCWXGQ"></script>

    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-J1N2HCWXGQ');
    </script>
</head>

<body>
    <!-- aiz-main-wrapper -->
    <div class="aiz-main-wrapper d-flex flex-column">

        <!-- Header -->
        <!-- Top Bar -->
        @include('frontend.layouts.partials.nav')
        <!-- END Top Bar -->
        @include('frontend.layouts.partials.header')

         @yield('frontend_content')
        <!-- Footer -->
        @include('frontend.layouts.partials.footer')

    </div>



    <script>
        function confirm_modal(delete_url) {
            jQuery('#confirm-delete').modal('show', {
                backdrop: 'static'
            });
            document.getElementById('delete_link').setAttribute('href', delete_url);
        }
    </script>

    <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">

                    <h4 class="modal-title" id="myModalLabel">Confirmation</h4>
                </div>

                <div class="modal-body">
                    <p>Delete confirmation message</p>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <a id="delete_link" class="btn btn-danger btn-ok">Delete</a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="addToCart">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-zoom product-modal" id="modal-size"
            role="document">
            <div class="modal-content position-relative">
                <div class="c-preloader text-center p-3">
                    <i class="las la-spinner la-spin la-3x"></i>
                </div>
                <button type="button" class="close absolute-top-right btn-icon close z-1" data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true" class="la-2x">&times;</span>
                </button>
                <div id="addToCart-modal-body">

                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- SCRIPTS -->
    @include('frontend.layouts.partials.scripts')


    /* Load more */
    <script>
        $(document).ready(function() {
            $(".content").slice(0, 6).show();
            $("#loadMore").on("click", function(e) {
                e.preventDefault();
                $(".content:hidden").slice(0, 4).slideDown();
                if ($(".content:hidden").length == 0) {
                    $("#loadMore").text("No Content").addClass("noContent");
                }
            });
        })
    </script>


    <script type="text/javascript">
        window.fbAsyncInit = function() {
            FB.init({
                xfbml: true,
                version: 'v3.3'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <div id="fb-root"></div>
    <!-- Your customer chat code -->
    <div class="fb-customerchat" attribution=setup_tool page_id="104243982318883">
    </div>
    </div>

    <script></script>

    <script>
        $(document).ready(function() {
            $('.category-nav-element').each(function(i, el) {
                $(el).on('mouseover', function() {
                    if (!$(el).find('.sub-cat-menu').hasClass('loaded')) {
                        $.post('https://sobkisubazar.com/category/nav-element-list', {
                            _token: AIZ.data.csrf,
                            id: $(el).data('id')
                        }, function(data) {
                            $(el).find('.sub-cat-menu').addClass('loaded').html(data);
                        });
                    }
                });
            });

        });

        $('#search').on('keyup', function() {
            search();
        });

        $('#search').on('focus', function() {
            search();
        });

        function search() {
            var searchKey = $('#search').val();
            if (searchKey.length > 0) {
                $('body').addClass("typed-search-box-shown");

                $('.typed-search-box').removeClass('d-none');
                $('.search-preloader').removeClass('d-none');
                $.post('https://sobkisubazar.com/ajax-search', {
                    _token: AIZ.data.csrf,
                    search: searchKey
                }, function(data) {
                    if (data == '0') {
                        // $('.typed-search-box').addClass('d-none');
                        $('#search-content').html(null);
                        $('.typed-search-box .search-nothing').removeClass('d-none').html(
                            'Sorry, nothing found for <strong>"' + searchKey + '"</strong>');
                        $('.search-preloader').addClass('d-none');

                    } else {
                        $('.typed-search-box .search-nothing').addClass('d-none').html(null);
                        $('#search-content').html(data);
                        $('.search-preloader').addClass('d-none');
                    }
                });
            } else {
                $('.typed-search-box').addClass('d-none');
                $('body').removeClass("typed-search-box-shown");
            }
        }
    </script>

    <script>
        //Get the button
        var mybutton = document.getElementById("myBtn");

        /* When the user scrolls down 20px from the top of the document, show the button */
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            // document.body.scrollTop = 0 ;
            // document.documentElement.scrollTop = 0;
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }
    </script>

</body>

</html>

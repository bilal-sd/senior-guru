 <!-- ******************************************
             Scripts
 ****************************************** -->
 <script src="{{ asset('assets/vendor/global/global.min.js') }}"></script>
 <script src="{{ asset('assets/vendor/chart.js/Chart.bundle.min.js') }}"></script>
 <script src="{{ asset('assets/vendor/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>
 <script src="{{ asset('assets/vendor/apexchart/apexchart.js') }}"></script>
 <script src="{{ asset('assets/vendor/peity/jquery.peity.min.js') }}"></script>
 <script src="{{ asset('assets/js/dashboard/dashboard-1.js') }}"></script>
 <script src="{{ asset('assets/vendor/owl-carousel/owl.carousel.js') }}"></script>
 <script src="{{ asset('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
 <script src="{{ asset('assets/vendor/fullcalendar/js/main.min.js') }}"></script>
 <script src="{{ asset('assets/vendor/moment/moment.min.js') }}"></script>
 <script src="{{ asset('assets/js/plugins-init/fullcalendar-init.js') }}"></script>
 <script src="{{ asset('assets/vendor/lightgallery/js/lightgallery-all.min.js') }}"></script>
 <script src="{{ asset('assets/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
 <script src="{{ asset('assets/js/plugins-init/datatables.init.js') }}"></script>
 {{-- <script src="{{ asset('assets/vendor/chartist/js/chartist.min.js') }}"></script> --}}
 {{-- <script src="{{ asset('assets/vendor/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js') }}"></script> --}}
 {{-- <script src="{{ asset('assets/js/plugins-init/chartist-init.js') }}"></script> --}}
 {{-- <script src="{{ asset('js/plugins-init/chartjs-init.js') }}"></script> --}}
 <script src="{{ asset('assets/vendor/flot/jquery.flot.js') }}"></script>
 <script src="{{ asset('assets/vendor/flot/jquery.flot.pie.js') }}"></script>
 <script src="{{ asset('assets/vendor/flot/jquery.flot.resize.js') }}"></script>
 <script src="{{ asset('assets/vendor/flot-spline/jquery.flot.spline.min.js') }}"></script>
 <script src="{{ asset('assets/js/plugins-init/flot-init.js') }}"></script>
 <script src="{{ asset('assets/vendor/raphael/raphael.min.js') }}"></script>
 <script src="{{ asset('assets/vendor/morris/morris.min.js') }}"></script>
 <script src="{{ asset('assets/js/plugins-init/morris-init.js') }}"></script>
 <script src="{{ asset('assets/js/plugins-init/piety-init.js') }}"></script>
 <script src="{{ asset('assets/vendor/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
 <script src="{{ asset('assets/js/plugins-init/sparkline-init.js') }}"></script>
 <script src="{{ asset('assets/vendor/svganimation/vivus.min.js') }}"></script>
 <script src="{{ asset('assets/vendor/svganimation/svg.animation.js') }}"></script>
 <script src="{{ asset('assets/vendor/highlightjs/highlight.pack.min.js') }}"></script>
 <script src="{{ asset('assets/vendor/star-rating/jquery.star-rating-svg.js') }}"></script>
 <script src="{{ asset('assets/vendor/dropzone/dist/dropzone.js') }}"></script>
 <script src="{{ asset('assets/vendor/ckeditor/ckeditor.js') }}"></script>
 <script src="{{ asset('assets/vendor/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
 <script src="{{ asset('assets/vendor/clockpicker/js/bootstrap-clockpicker.min.js') }}"></script>
 <script src="{{ asset('assets/vendor/jquery-asColor/jquery-asColor.min.js') }}"></script>
 <script src="{{ asset('assets/vendor/jquery-asGradient/jquery-asGradient.min.js') }}"></script>
 <script src="{{ asset('assets/vendor/jquery-asColorPicker/js/jquery-asColorPicker.min.js') }}"></script>
 <script src="{{ asset('assets/vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}">
 </script>
 <script src="{{ asset('assets/vendor/pickadate/picker.js') }}"></script>
 <script src="{{ asset('assets/vendor/pickadate/picker.time.js') }}"></script>
 <script src="{{ asset('assets/vendor/pickadate/picker.date.js') }}"></script>
 <script src="{{ asset('assets/js/plugins-init/bs-daterange-picker-init.js') }}"></script>
 <script src="{{ asset('assets/js/plugins-init/clock-picker-init.js') }}"></script>
 <script src="{{ asset('assets/js/plugins-init/jquery-asColorPicker.init.js') }}"></script>
 <script src="{{ asset('assets/js/plugins-init/material-date-picker-init.js') }}"></script>
 <script src="{{ asset('assets/js/plugins-init/pickadate-init.js') }}"></script>
 <script src="{{ asset('assets/vendor/jquery-steps/build/jquery.steps.min.js') }}"></script>
 <script src="{{ asset('assets/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
 <script src="{{ asset('assets/js/plugins-init/jquery.validate-init.js') }}"></script>
 <script src="{{ asset('assets/vendor/jquery-smartwizard/dist/js/jquery.smartWizard.js') }}"></script>
 <script src="{{ asset('assets/js/custom.min.js') }}"></script>
 {{-- <script src="{{ asset('assets/js/dlabnav-init.js') }}"></script> --}}
 <script src="{{ asset('assets/js/demo.js') }}"></script>
 <script src="bower_components/sweetalert2/dist/sweetalert2.min.js"></script>
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 {{-- <script src="{{ asset('assets/js/styleSwitcher.js') }}"></script> --}}

 {{-- <script>
     function JobickCarousel() {

         /*  testimonial one function by = owl.carousel.js */
         jQuery('.front-view-slider').owlCarousel({
             loop: false,
             margin: 30,
             nav: true,
             autoplaySpeed: 3000,
             navSpeed: 3000,
             autoWidth: true,
             paginationSpeed: 3000,
             slideSpeed: 3000,
             smartSpeed: 3000,
             autoplay: false,
             animateOut: 'fadeOut',
             dots: true,
             navText: ['', ''],
             responsive: {
                 0: {
                     items: 1
                 },

                 480: {
                     items: 1
                 },

                 767: {
                     items: 3
                 },
                 1750: {
                     items: 3
                 }
             }
         })
     }

     jQuery(window).on('load', function() {
         setTimeout(function() {
             JobickCarousel();
         }, 1000);
     });
 </script> --}}

 <script>
     function setVal(pId) {
         $("#Inputparent_id").val(pId);
     }

     function childmaker(child, html = "", status = "") {
         child = child.original;
         if (child.length > 0) {
             $.each(child, function(index, value) {
                 if (value['status'] == 1) {
                     status =
                         '<span class="badge light badge-success status" data-id="' +
                         value['id'] + '">Active</span>';
                 } else {
                     status =
                         '<span class="badge light badge-danger status" data-id="' +
                         value['id'] + '">Inactive</span>';
                 }
                 html += '<div class="accordion-item">' +
                     '<div class="accordion-header rounded-lg collapsed row">' +
                     '<div class="col-md-1">' +
                     '<button class="accordion-header-indicator btn btn-danger ms-3 start-0" id="accord-2' +
                     value['id'] + '" data-bs-toggle="collapse" data-bs-target="#collapse2' +
                     value['id'] +
                     '" aria-controls="collapse2One" aria-expanded="false" role="button"></button>' +
                     '</div>' +
                     '<div class="col-md-11">' +
                     '<div class="d-flex justify-content-between align-items-center">' +
                     '<div class="col-1"><strong>' + value['id'] + '</strong></div>' +
                     '<div class="col fw-bold">' + value['name'] + '</div>' +
                     '<div class="col">' + value['slug'] + '</div>' +
                     '<div class="col">' + status + '</div>' +
                     '<div class="col">' +
                     '<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#sendMessageModal" onclick="setVal(' +
                     value['id'] + ')">Add</button>' +
                     '</div>' +
                     '<div class="col-1">' +
                     '<div class="dropdown">' +
                     '<a href="#" class="btn btn-primary light sharp" data-bs-toggle="dropdown" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1">' +
                     '<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">' +
                     '<rect x="0" y="0" width="24" height="24"></rect>' +
                     '<circle fill="#000000" cx="5" cy="12" r="2"></circle>' +
                     '<circle fill="#000000" cx="12" cy="12" r="2"> </circle>' +
                     '<circle fill="#000000" cx="19" cy="12" r="2"> </circle>' +
                     '</g>' +
                     '</svg>' +
                     '</a>' +
                     '<ul class="dropdown-menu dropdown-menu-end" style="margin: 0px;">' +
                     '<li class="dropdown-item edit-cat" data-bs-toggle="modal" data-bs-target="#sendMessageModal" data-id="' +
                     value['id'] +
                     '"><i class="fa fa-plus text-primary me-2"></i>Edit</li>' +
                     '<li class="dropdown-item del-cat" data-id="' + value['id'] +
                     '" data-p-id="' + value['parent_id'] +
                     '"><i class="fa fa-ban text-primary me-2"></i>Delete</li>' +
                     '</ul>' +
                     '</div>' +
                     '</div>' +
                     '</div>' +
                     '</div>' +
                     '</div>' +
                     '<div id="collapse2' + value['id'] +
                     '" class="accordion__body collapse" aria-labelledby="accord-2' + value[
                         'id'] + '">' +
                     '<div class="accordion-body-text">' +
                     childmaker(value['children']) +
                     '</div>' +
                     '</div>' +
                     '</div>';
                    //  console.log(value['id']);
             });
         }
         return html;
     }

     function loaddata() {
         let html = "";
         let status = "";
         $.ajax({
             type: "GET",
             url: "{{ Route('admin.categories.show') }}",
             dataType: "JSON",
             success: function(response) {
                 $.each(response, function(index, value) {
                     if (value['parent_id'] == 0) {
                         if (value['status'] == 1) {
                             status =
                                 '<span class="badge light badge-success status" data-id="' +
                                 value['id'] + '">Active</span>';
                         } else {
                             status =
                                 '<span class="badge light badge-danger status" data-id="' +
                                 value['id'] + '">Inactive</span>';
                         }
                         html += '<div class="accordion-item">' +
                             '<div class="accordion-header rounded-lg collapsed row">' +
                             '<div class="col-md-1">' +
                             '<button class="accordion-header-indicator btn btn-danger ms-3 start-0" id="accord-2' +
                             value['id'] + '" data-bs-toggle="collapse" data-bs-target="#collapse2' +
                             value['id'] +
                             '" aria-controls="collapse2One" aria-expanded="false" role="button"></button>' +
                             '</div>' +
                             '<div class="col-md-11">' +
                             '<div class="d-flex justify-content-between align-items-center">' +
                             '<div class="col-1"><strong>' + value['id'] + '</strong></div>' +
                             '<div class="col fw-bold">' + value['name'] + '</div>' +
                             '<div class="col">' + value['slug'] + '</div>' +
                             '<div class="col">' + status + '</div>' +
                             '<div class="col">' +
                             '<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#sendMessageModal" onclick="setVal(' +
                             value['id'] + ')">Add</button>' +
                             '</div>' +
                             '<div class="col-1">' +
                             '<div class="dropdown">' +
                             '<a href="#" class="btn btn-primary light sharp" data-bs-toggle="dropdown" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1">' +
                             '<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">' +
                             '<rect x="0" y="0" width="24" height="24"></rect>' +
                             '<circle fill="#000000" cx="5" cy="12" r="2"></circle>' +
                             '<circle fill="#000000" cx="12" cy="12" r="2"> </circle>' +
                             '<circle fill="#000000" cx="19" cy="12" r="2"> </circle>' +
                             '</g>' +
                             '</svg>' +
                             '</a>' +
                             '<ul class="dropdown-menu dropdown-menu-end" style="margin: 0px;">' +
                             '<li class="dropdown-item edit-cat" data-bs-toggle="modal" data-bs-target="#sendMessageModal" data-id="' +
                             value['id'] +
                             '"><i class="fa fa-plus text-primary me-2"></i>Edit</li>' +
                             '<li class="dropdown-item del-cat" data-id="' + value['id'] +
                             '" data-p-id="' + value['parent_id'] +
                             '"><i class="fa fa-ban text-primary me-2"></i>Delete</li>' +
                             '</ul>' +
                             '</div>' +
                             '</div>' +
                             '</div>' +
                             '</div>' +
                             '</div>' +
                             '<div id="collapse2' + value['id'] +
                             '" class="accordion__body collapse" aria-labelledby="accord-2' + value[
                                 'id'] + '">' +
                             '<div class="accordion-body-text">' +
                             childmaker(value['children']) +
                             '</div>' +
                             '</div>' +
                             '</div>';
                     }
                 });
                 $("#accordion-two").html(html);
             }
         });
     }
     loaddata();

     $(document).ready(function() {
         $(document).on('click', ".status", function() {
             let id = $(this).data("id");
             $.ajax({
                 type: "GET",
                 url: "{{ URL::to('admin/categories/status') }}" + "/" + id,
                 dataType: "JSON",
                 success: function(response) {
                     if (response.status == 1) {
                         $(".status[data-id='" + id + "']").removeClass("badge-danger");
                         $(".status[data-id='" + id + "']").addClass("badge-success");
                         $(".status[data-id='" + id + "']").html("Active");
                     } else {
                         $(".status[data-id='" + id + "']").removeClass("badge-success");
                         $(".status[data-id='" + id + "']").addClass("badge-danger");
                         $(".status[data-id='" + id + "']").html("Inactive");
                     }
                     loaddata();
                 }
             });
         });

         $(document).on('keyup', '#InputCat_name', function() {
             var name = $(this).val();
             var slug = name.toLowerCase().trim().replace(/ /g, '_');
             $("#InputSlug").val(slug);
         });

         $(document).on('click', '.del-cat', function(e) {
             e.preventDefault();
             var id = $(this).attr('data-id');
             swal({
                 title: "Are you sure?",
                 text: "Once deleted, you will not be able to recover this Data!",
                 icon: "warning",
                 buttons: true,
                 dangerMode: true,
             }).then((willDelete) => {
                 if (willDelete) {
                     $.ajax({
                         url: "{{ url('/admin/categories/delete') }}" + '/' + id,
                         type: "GET",
                         success: function(data) {
                             swal("Poof! Your Data has been deleted!", {
                                 icon: "success",
                             });
                             loaddata();
                         },
                         error: function(data) {
                             swal("Oops", "We couldn't connect to the server!",
                                 "error");
                         }
                     });
                 }
             });
         });

         $(document).on('click', '.edit-cat', function(e) {
             e.preventDefault();
             var pid = $(this).attr('data-p-id');
             var id = $(this).attr('data-id');
             let ele = $(this).parent().parent().parent().parent();
             let name = $(ele).children()[1];
             let slug = $(ele).children()[2];
             $('#InputCat_name').val($(name).html());
             $('#InputSlug').val($(slug).html());
             $('#Inputparent_id').after('<input type="hidden" id="id" value="' + id + '">');
             if (pid == 0) {
                 $('#Inputparent_id').val(0);
                 $('#Inputparent_id').attr('disabled', true);
             } else {
                 $('#Inputparent_id').val(pid);
             }
         });

         $('#submit').on('click', function(e) {
             e.preventDefault();
             let cat_name = $('#InputCat_name').val();
             let slug = $('#InputSlug').val();
             let parent_id = $('#Inputparent_id').val();
             let id = $('#id').val();
             let dataobj = {
                 "_token": "{{ csrf_token() }}",
                 name: cat_name,
                 slug: slug,
                 parent_id: parent_id,
             };
             if ($('#id').length) {
                 dataobj.id = id;
             }
             $.ajax({
                 url: "{{ route('Submit-Categories') }}",
                 type: "POST",
                 data: dataobj,
                 success: function(response) {
                     if (response.status == 'success') {
                         swal({
                             title: "error!",
                             text: "You clicked the button!",
                             icon: "error",
                             button: "Ok!"
                         });
                     } else {
                         swal({
                             title: "Good job!",
                             text: "You clicked the button!",
                             icon: "success",
                             button: "Ok!"
                         });
                     }
                     if ($('#id').length) {
                         $('#id').remove();
                     }
                     loaddata();
                     $("#SubmitForm")[0].reset();
                     $('#sendMessageModal').modal('toggle');
                 }
             });
         });
         var myModalEl = document.getElementById('sendMessageModal')
         myModalEl.addEventListener('hidden.bs.modal', function(event) {
             $("#SubmitForm")[0].reset();
             if ($('#id').length) {
                 $('#id').remove();
             }
         })
     });
 </script>
 </body>

 </html>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Billing</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">
        <link rel="icon" href="<?=base_url()?>/cvmc_logo.png" type="image/gif">
        <script src="<?php echo base_url('/js/jquery.min.js');?>"></script>
        <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script> -->

        <link rel="stylesheet" type="text/css" href="<?php echo base_url('/css/jquery.dataTables.min.css');?>">
        <script type="text/javascript" src="<?php echo base_url('/js/jquery.dataTables.min.js');?>"></script>


        <!-- Customized Bootstrap Stylesheet -->
        <link href="<?php echo base_url('/css/bootstrap.min.css'); ?>" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="<?php echo base_url('/css/style.css'); ?>" rel="stylesheet">
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <!-- <span class="sr-only">Loading...</span> -->
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Navbar & Hero Start -->
        <div class="container-fluid nav-bar sticky-top px-4 py-2 py-lg-0 bg-primary">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a href="/" class="navbar-brand p-0">
                    <h1 class="display-6 text-white"><i class="fas fa-swimmer text-primary me-3"></i>
                        <svg height="50" width="50" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve">
                            <path style="fill:#FF7069;" d="M256,0c141.439,0,256,114.561,256,256S397.439,512,256,512S0,397.439,0,256S114.561,0,256,0z"/>
                            <path style="fill:#E4E7ED;" d="M355.151,19.95v174.768H163.897V17.083C192.567,5.973,223.627,0,256.119,0 c35.121,0,68.569,7.048,99.151,19.95H355.151z"/>
                            <path style="fill:#C6CBD6;" d="M355.151,194.718c-31.059,0-62.119,0-93.178,0C264.959,106.199,352.164,102.734,355.151,194.718z"/>
                            <path style="fill:#FFFFFF;" d="M133.077,126.148h129.374h45.992c-23.056,0-42.288,26.042-45.992,60.088V408.31l-18.755-27.237 l-19.95,29.028l-19.95-29.028l-19.95,29.028l-19.95-29.028l-19.95,29.028l-19.95-29.028l-19.95,29.028l-19.95-29.028l-19.95,29.028 V195.434c0-38.227,31.179-69.286,69.286-69.286H133.077z"/>
                            <polygon style="fill:#5D718F;" points="283.237,235.692 471.145,235.692 471.145,460.274 283.237,460.274 "/>
                            <g>
                                <path style="fill:#FFFFFF;" d="M305.575,309.04h19.352c2.628,0,4.778,2.15,4.778,4.778v19.352c0,2.628-2.15,4.778-4.778,4.778 h-19.352c-2.628,0-4.778-2.15-4.778-4.778v-19.352C300.797,311.19,302.947,309.04,305.575,309.04z"/>
                                <path style="fill:#FFFFFF;" d="M343.085,309.04h19.352c2.628,0,4.778,2.15,4.778,4.778v19.352c0,2.628-2.15,4.778-4.778,4.778 h-19.352c-2.628,0-4.778-2.15-4.778-4.778v-19.352C338.307,311.19,340.457,309.04,343.085,309.04z"/>
                            </g>
                            <path style="fill:#83CF8F;" d="M380.595,309.04h19.352c2.628,0,4.778,2.15,4.778,4.778v19.352c0,2.628-2.15,4.778-4.778,4.778 h-19.352c-2.628,0-4.778-2.15-4.778-4.778v-19.352C375.817,311.19,377.967,309.04,380.595,309.04z"/>
                            <path style="fill:#FFE356;" d="M418.105,309.04h19.352c2.628,0,4.778,2.15,4.778,4.778v19.352c0,2.628-2.15,4.778-4.778,4.778 h-19.352c-2.628,0-4.778-2.15-4.778-4.778v-19.352C413.327,311.19,415.477,309.04,418.105,309.04z"/>
                            <g>
                                <path style="fill:#FFFFFF;" d="M305.575,345.714h19.352c2.628,0,4.778,2.15,4.778,4.778v19.352c0,2.628-2.15,4.778-4.778,4.778 h-19.352c-2.628,0-4.778-2.15-4.778-4.778v-19.352C300.797,347.864,302.947,345.714,305.575,345.714z"/>
                                <path style="fill:#FFFFFF;" d="M343.085,345.714h19.352c2.628,0,4.778,2.15,4.778,4.778v19.352c0,2.628-2.15,4.778-4.778,4.778 h-19.352c-2.628,0-4.778-2.15-4.778-4.778v-19.352C338.307,347.864,340.457,345.714,343.085,345.714z"/>
                                <path style="fill:#FFFFFF;" d="M380.595,345.714h19.352c2.628,0,4.778,2.15,4.778,4.778v19.352c0,2.628-2.15,4.778-4.778,4.778 h-19.352c-2.628,0-4.778-2.15-4.778-4.778v-19.352C375.817,347.864,377.967,345.714,380.595,345.714z"/>
                                <path style="fill:#FFFFFF;" d="M418.105,345.714h19.352c2.628,0,4.778,2.15,4.778,4.778v19.352c0,2.628-2.15,4.778-4.778,4.778 h-19.352c-2.628,0-4.778-2.15-4.778-4.778v-19.352C413.327,347.864,415.477,345.714,418.105,345.714z"/>
                                <path style="fill:#FFFFFF;" d="M305.575,382.507h19.352c2.628,0,4.778,2.15,4.778,4.778v19.352c0,2.628-2.15,4.778-4.778,4.778 h-19.352c-2.628,0-4.778-2.15-4.778-4.778v-19.352C300.797,384.657,302.947,382.507,305.575,382.507z"/>
                                <path style="fill:#FFFFFF;" d="M343.085,382.507h19.352c2.628,0,4.778,2.15,4.778,4.778v19.352c0,2.628-2.15,4.778-4.778,4.778 h-19.352c-2.628,0-4.778-2.15-4.778-4.778v-19.352C338.307,384.657,340.457,382.507,343.085,382.507z"/>
                                <path style="fill:#FFFFFF;" d="M380.595,382.507h19.352c2.628,0,4.778,2.15,4.778,4.778v19.352c0,2.628-2.15,4.778-4.778,4.778 h-19.352c-2.628,0-4.778-2.15-4.778-4.778v-19.352C375.817,384.657,377.967,382.507,380.595,382.507z"/>
                                <path style="fill:#FFFFFF;" d="M418.105,382.507h19.352c2.628,0,4.778,2.15,4.778,4.778v19.352c0,2.628-2.15,4.778-4.778,4.778 h-19.352c-2.628,0-4.778-2.15-4.778-4.778v-19.352C413.327,384.657,415.477,382.507,418.105,382.507z"/>
                                <path style="fill:#FFFFFF;" d="M305.575,419.181h19.352c2.628,0,4.778,2.15,4.778,4.778v19.352c0,2.628-2.15,4.778-4.778,4.778 h-19.352c-2.628,0-4.778-2.15-4.778-4.778v-19.352C300.797,421.331,302.947,419.181,305.575,419.181z"/>
                                <path style="fill:#FFFFFF;" d="M343.085,419.181h19.352c2.628,0,4.778,2.15,4.778,4.778v19.352c0,2.628-2.15,4.778-4.778,4.778 h-19.352c-2.628,0-4.778-2.15-4.778-4.778v-19.352C338.307,421.331,340.457,419.181,343.085,419.181z"/>
                                <path style="fill:#FFFFFF;" d="M380.595,419.181h19.352c2.628,0,4.778,2.15,4.778,4.778v19.352c0,2.628-2.15,4.778-4.778,4.778 h-19.352c-2.628,0-4.778-2.15-4.778-4.778v-19.352C375.817,421.331,377.967,419.181,380.595,419.181z"/>
                                <path style="fill:#FFFFFF;" d="M418.105,419.181h19.352c2.628,0,4.778,2.15,4.778,4.778v19.352c0,2.628-2.15,4.778-4.778,4.778 h-19.352c-2.628,0-4.778-2.15-4.778-4.778v-19.352C413.327,421.331,415.477,419.181,418.105,419.181z"/>
                            </g>
                            <polygon style="fill:#ECF0F1;" points="296.019,247.518 458.363,247.518 458.363,283.475 296.019,283.475 "/>
                            <path style="fill:#807E7E;" d="M441.639,251.819c2.509,0,4.898,1.075,6.57,2.748l0,0l0,0c1.672,1.672,2.748,4.062,2.748,6.57v6.809 c0,2.628-1.075,4.898-2.748,6.57c-1.672,1.672-4.062,2.748-6.57,2.748s-4.898-1.075-6.57-2.748l0,0 c-1.672-1.672-2.748-4.062-2.748-6.57v-6.809c0-2.628,1.075-4.898,2.748-6.57S439.13,251.819,441.639,251.819z M445.82,256.956 c-1.075-1.075-2.628-1.792-4.181-1.792c-1.672,0-3.106,0.717-4.181,1.792c-1.075,1.075-1.792,2.628-1.792,4.181v6.809 c0,1.672,0.717,3.106,1.792,4.181c1.075,1.075,2.628,1.792,4.181,1.792c1.672,0,3.106-0.717,4.181-1.792s1.792-2.628,1.792-4.181 v-6.809C447.612,259.464,446.895,258.031,445.82,256.956L445.82,256.956z"/>
                            <polygon style="fill:#83CF8F;" points="118.145,173.454 205.708,173.454 205.708,181.577 118.145,181.577 "/>
                            <g>
                                <polygon style="fill:#C6CBD6;" points="143.589,194.718 241.665,194.718 241.665,202.841 143.589,202.841 	"/>
                                <polygon style="fill:#C6CBD6;" points="143.589,224.941 241.665,224.941 241.665,232.944 143.589,232.944 	"/>
                                <polygon style="fill:#C6CBD6;" points="143.589,255.044 241.665,255.044 241.665,263.168 143.589,263.168 	"/>
                                <polygon style="fill:#C6CBD6;" points="143.589,285.267 241.665,285.267 241.665,293.271 143.589,293.271 	"/>
                            </g>
                            <polygon style="fill:#FF7069;" points="143.589,315.371 192.687,315.371 192.687,323.494 143.589,323.494 "/>
                            <path style="fill:#C6CBD6;" d="M72.153,347.864h8.482v8.482h-8.482V347.864z M242.621,347.864h8.482v8.482h-8.482V347.864z M223.627,347.864h8.482v8.482h-8.482V347.864z M204.633,347.864h8.482v8.482h-8.482V347.864z M185.639,347.864h8.482v8.482h-8.482 V347.864z M166.645,347.864h8.482v8.482h-8.482V347.864z M147.651,347.864h8.482v8.482h-8.482V347.864z M128.657,347.864h8.482 v8.482h-8.482V347.864z M109.663,347.864h8.482v8.482h-8.482V347.864z M90.669,347.864h8.482v8.482h-8.482V347.864z"/>
                            <path style="fill:#FFE356;" d="M85.174,218.49c0-5.017,1.075-9.079,3.106-12.185s5.137-5.137,9.198-5.973v-5.495h9.557v5.495 c4.181,0.836,7.287,2.867,9.437,5.853c2.031,3.106,3.106,7.168,3.106,12.304v2.389h-11.11v-3.106c0-2.748-0.478-4.539-1.553-5.734 c-1.075-1.075-2.509-1.672-4.301-1.672s-3.225,0.597-4.301,1.672c-1.075,1.075-1.553,2.986-1.553,5.734 c0,2.509,0.597,4.778,1.672,6.57c1.075,1.792,2.509,3.584,4.301,5.137c1.672,1.553,3.464,3.106,5.495,4.659 c1.911,1.553,3.823,3.225,5.495,5.137c1.672,1.911,3.106,4.181,4.301,6.69c1.075,2.509,1.672,5.495,1.672,9.079 c0,5.137-1.075,9.198-3.225,12.304c-2.15,3.106-5.256,5.137-9.437,5.973v5.376h-9.557v-5.376c-4.301-0.836-7.406-2.867-9.557-5.973 c-2.031-3.106-3.106-7.287-3.106-12.304v-5.137h11.11v5.853c0,2.748,0.597,4.539,1.672,5.615s2.509,1.553,4.42,1.553 c1.792,0,3.345-0.478,4.42-1.553s1.672-2.986,1.672-5.615c0-2.509-0.597-4.778-1.672-6.57s-2.509-3.584-4.301-5.137 c-1.672-1.553-3.584-3.106-5.495-4.659s-3.823-3.225-5.495-5.137c-1.672-1.911-3.106-4.181-4.301-6.69S85.174,222.074,85.174,218.49 z"/>
                        </svg>Billing</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                    <a href="<?php echo base_url('/');?>" class="nav-item nav-link"><b>Home</b></a>
                    <a href="<?php echo base_url('/view');?>" class="nav-item nav-link active"><b>View</b></a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link" data-bs-toggle="dropdown"><b><?= session()->get('firstname'). ' '. session()->get('lastname') ?>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/></svg></b>
                        </a>
                        <div class="dropdown-menu m-0">
                            <a href="/logout" class="dropdown-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/>
                                <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
                            </svg>Logout</a>
                        </div>
                    </div>

                    <!-- <a href="service.html" class="nav-item nav-link"><b>Service</b></a>
                    <a href="blog.html" class="nav-item nav-link"><b>Blog</b></a> -->
                    </div>
                    
                </div>
            </nav>
        </div>
        <!-- Navbar & Hero End -->
     <br>
        <!-- About Start -->
        <div class="container-fluid about pb-5">
            <div class="container pb-5">
                        <div class="col-md-12 col-lg-12 col-xl-12 wow fadeInUp" data-wow-delay="0.2s" >
                        <div class="service-days p-4" >
                            <div class="row" id="data">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
       
        
        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707z"/></svg>
        </a>   
    <!-- JavaScript Libraries -->
    
    <script src="<?php echo base_url('/js/jquery.validate.js');?>"></script>
    <script src="<?php echo base_url('/js/bootstrap.bundle.min.js');?>"></script>

    <!-- Template Javascript -->
    <script src="<?php echo base_url('/js/main.js');?>"></script>
    <script>
        $(document).ready(function () {
            function loadData (){
                $.ajax({
                url: '/viewFetch',
                type: 'GET',
                dataType: 'json', 
                success: function (res) {
                    $('#data').html(" ");
                    console.log('data', res.datas)
                    $.each(res.datas, function (key, value){
                        $('#data').append(
                            '<div class="col-md-6" id="'+value['id']+'">\
                            <div class="py-2 border-bottom border-top d-flex align-items-center justify-content-between flex-wrap" >\
                            <h4 class="mb-0 pb-2 pb-sm-0">'+value['name']+'</h4>\
                            <p class="mb-0"> <i class="text-primary me-2"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16"> <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/></svg> </i>'+ formatTime(value['time_called'] ) +'</p>\
                            </div> </div>' 
                        );
                    });
                }
                }); 
            }
            
            loadData();
            setInterval(loadData, 5000);
                
            function formatTime(timeString) {
                var timeParts = timeString.split(':');
                if (timeParts.length !== 3) {
                    console.error('Invalid time format:', timeString);
                    return 'N/A';
                }
                var hours = parseInt(timeParts[0], 10);
                var minutes = parseInt(timeParts[1], 10);
                var seconds = parseInt(timeParts[2], 10);
                if (isNaN(hours) || isNaN(minutes) || isNaN(seconds)) {
                    console.error('Invalid time parts:', timeString);
                    return 'N/A';
                }
                var period = hours >= 12 ? 'PM' : 'AM';
                hours = hours % 12;
                hours = hours ? hours : 12; 
                minutes = minutes < 10 ? '0' + minutes : minutes;
                seconds = seconds < 10 ? '0' + seconds : seconds;
                return hours + ':' + minutes + ' ' + period;
            }

           
        });  
    </script>
    </body>
</html>
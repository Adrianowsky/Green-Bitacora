<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Green Bitacora">

  <link rel="preload" as="font" type="font/woff2" href="/wp-content/themes/greenbitacora/fonts/montserrat-v14-latin-regular.woff2" crossorigin>
  <link rel="preload" as="font" type="font/woff2" href="/wp-content/themes/greenbitacora/fonts/open-sans-v17-latin-regular.woff2" crossorigin>
  <link rel="preload" as="font" type="font/woff2" href="/wp-content/themes/greenbitacora/fonts/montserrat-v14-latin-700.woff2" crossorigin>
  <link rel="preload" as="font" type="font/woff2" href="/wp-content/themes/greenbitacora/fonts/montserrat-v14-latin-italic.woff2" crossorigin>
  <!-- check if user selected dark theme -->
  <script type="text/javascript">
    var currentTheme = localStorage.getItem('theme');
    if (currentTheme) {
      document.documentElement.setAttribute('data-theme', currentTheme);
    }
  </script>

  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
  <nav id="navbar">
    <div id="nav-elements">

      <div id="nav-logo-container">
        <a id="logo" href="<?php echo esc_url(home_url('/')); ?>" rel="home">

          <svg version="1.1" id="logo-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1427.854 322.484" xml:space="preserve">
            <style type="text/css">
              .Acento {
                fill: #E74B3C;
                stroke: #E74B3C;
                stroke-miterlimit: 10;
              }

              .AspaNegra {
                stroke: #000000;
                stroke-linecap: round;
                stroke-linejoin: round;
              }

              .st0 {
                stroke: #000000;
                stroke-miterlimit: 10;
              }

              .st1 {
                fill: #E74B3C;
                stroke: #000000;
                stroke-linecap: round;
                stroke-linejoin: round;
              }

              .st2 {
                fill: #3598DB;
                stroke: #000000;
                stroke-linecap: round;
                stroke-linejoin: round;
              }

              .st3 {
                fill: #3A97D3;
                stroke: #000000;
                stroke-linecap: round;
                stroke-linejoin: round;
              }

              .st4 {
                fill: #F2C40F;
                stroke: #000000;
                stroke-linecap: round;
                stroke-linejoin: round;
              }

              .st5 {
                fill: #2FCC71;
                stroke: #000000;
                stroke-linecap: round;
                stroke-linejoin: round;
              }

              .st6 {
                fill: #2FCC71;
                stroke: #000000;
                stroke-linejoin: round;
              }
            </style>
            <path class="st0" d="M273.184,169.649c-4.144,53.96-47.246,96.712-101.238,100.415l-16.068-0.093h-0.023
              C102.247,265.683,59.78,222.935,55.844,169.3l0.008-15.944c1.889-26.076,13.116-50.597,31.623-69.063h0.008v-0.008
              c18.428-18.475,42.892-29.698,68.916-31.615h8.471v32.833c-41.882,0.007-75.827,33.965-75.82,75.847
              c0.007,41.882,33.965,75.827,75.847,75.82c36.531-0.006,67.866-26.058,74.543-61.974L273.184,169.649z" />
            <circle class="st0" cx="164.53" cy="161.34" r="6.601" />
            <polyline class="AspaNegra" points="181.335,168.298 210.031,180.188 239.223,175.156 273.122,169.315 273.122,169.308 
              318.654,161.464 319.369,161.34 318.631,161.34 182.718,161.34 " />
            <polyline class="AspaNegra" points="170.937,178.056 171.029,178.287 182.152,206.505 210.039,221.31 240.856,237.666 
              240.864,237.674 240.856,237.666 177.44,174.317 " />
            <polyline class="st1" points="151.731,174.2 88.261,237.608 118.929,221.162 144.183,207.623 157.113,177.905 " />
            <polyline class="AspaNegra" points="146.342,161.34 10.429,161.34 55.852,153.356 89.86,147.384 118.493,142.352 147.693,154.444 
              " />
            <polyline class="AspaNegra" points="164.53,143.408 164.53,143.152 164.53,7.239 172.506,52.693 178.47,86.669 183.525,115.481 
              171.496,144.534 " />
            <path class="AspaNegra" d="M180.642,154.605l30.919-12.813l0.249-0.101l-0.249,0.101l13.73-26.265l16.322-31.214
              c0.008-0.01,0.005-0.025-0.005-0.033c-0.01-0.008-0.025-0.005-0.033,0.005l0,0l-64.492,64.564L180.642,154.605z" />
            <path d="M181.335,168.298c-3.843,9.291-14.49,13.707-23.78,9.864c-9.291-3.843-13.707-14.49-9.864-23.78
              c3.843-9.291,14.49-13.707,23.78-9.864c6.807,2.816,11.246,9.456,11.246,16.822C182.721,163.728,182.252,166.093,181.335,168.298z
               M179.844,161.34c0-8.458-6.857-15.315-15.315-15.315s-15.315,6.857-15.315,15.315s6.857,15.315,15.315,15.315
              C172.988,176.654,179.844,169.798,179.844,161.34z" />
            <polyline class="st1" points="164.53,143.152 164.53,7.239 156.399,52.67 150.302,86.716 145.27,114.837 157.564,144.534 " />
            <polyline class="AspaNegra" points="157.113,177.951 144.035,208.037 149.324,235.762 155.855,269.971 164.53,315.441 
              164.53,179.528 " />
            <polyline class="AspaNegra" points="151.681,174.189 88.261,237.608 104.617,206.817 118.835,180.041 147.693,168.236 " />
            <polyline class="AspaNegra" points="157.568,144.545 145.384,115.113 119.009,101.202 88.048,84.869 111.204,107.997 
              151.638,148.382 " />
            <polyline class="st2" points="177.39,148.479 241.576,84.285 210.489,100.99 183.525,115.481 171.496,144.534 " />
            <polyline class="st3" points="171.03,178.332 182.267,206.872 177.476,236.181 171.946,270.064 164.53,315.441 164.53,179.528 " />
            <polyline class="st4" points="181.323,168.293 209.699,180.05 224.33,207.101 240.864,237.674 177.532,174.257 " />
            <polyline class="st5" points="181.335,154.381 211.81,141.691 211.452,141.901 239.107,146.879 273.184,153.022 319.369,161.34 
              318.631,161.34 182.718,161.34 " />
            <polyline class="st6" points="147.706,154.449 118.765,142.464 104.491,115.693 88.055,84.869 88.048,84.869 151.875,148.326 " />
            <polyline class="st4" points="146.342,161.34 10.429,161.34 55.844,169.3 89.852,175.256 118.586,180.289 147.693,168.236 " />
            <g class="logo-text">
              <path class="st0" d="M394.906,203.165c0.042,0.973-0.783,1.46-2.476,1.46c-15.192,0-29.538-13.013-43.037-39.038
                c-5.205,0.254-7.978,0.381-8.315,0.381v26.66c0,1.989,0.486,3.312,1.46,3.967c0.973,0.657,3.131,1.238,6.475,1.746
                c2.327,0.381,3.491,1.206,3.491,2.476c0,1.059-0.19,1.714-0.571,1.968s-1.439,0.338-3.174,0.254
                c-7.66-0.338-16.018-0.169-25.073,0.508c-1.82,0.127-2.729-0.613-2.729-2.222c0-1.1,0.909-1.734,2.729-1.904
                c4.146-0.423,6.221-2.687,6.221-6.792v-60.811c0-4.021-2.349-6.496-7.046-7.427c-2.328-0.465-3.491-1.206-3.491-2.222
                c0-1.565,0.782-2.349,2.349-2.349c0.465,0,0.973,0.042,1.523,0.127c1.734,0.254,4.38,0.381,7.935,0.381
                c1.185,0,4.168-0.063,8.95-0.19c4.781-0.127,9.225-0.19,13.33-0.19c8.463,0,15.149,1.587,20.059,4.761
                c5.501,3.513,8.252,8.696,8.252,15.552c0,11.723-6.771,19.467-20.313,23.232c4.316,9.818,9.395,18.239,15.234,25.264
                c5.967,7.194,11.341,11.172,16.123,11.934C394.123,200.901,394.821,201.726,394.906,203.165z M369.388,141.783
                c0-6.263-1.608-10.728-4.824-13.394c-3.217-2.666-8.358-3.999-15.425-3.999c-3.174,0-5.312,0.435-6.411,1.301
                c-1.101,0.868-1.65,2.741-1.65,5.618v29.898c10.24-0.338,17.604-2.137,22.09-5.396C367.314,152.807,369.388,148.13,369.388,141.783
                z" />
              <path class="st0" d="M469.491,187.169c-1.186,5.036-1.968,10.114-2.349,15.234c-0.043,0.804-1.333,1.143-3.872,1.016
                c-6.602-0.339-15.023-0.508-25.264-0.508c-11.257,0-20.947,0.211-29.072,0.635c-1.82,0.084-2.729-0.655-2.729-2.222
                c0-1.1,0.909-1.734,2.729-1.904c2.539-0.296,4.168-0.782,4.888-1.46c0.889-0.846,1.333-2.623,1.333-5.332v-58.462
                c0-3.936-0.36-6.421-1.079-7.458c-0.72-1.037-2.709-2.063-5.967-3.079c-1.735-0.549-2.37-1.587-1.904-3.11
                c0.211-0.803,0.55-1.248,1.016-1.333c0.423-0.127,1.544-0.042,3.364,0.254c2.708,0.423,9.775,0.635,21.201,0.635
                c11.383,0,21.18-0.254,29.39-0.762c2.75-0.168,4.126,0.022,4.126,0.571c0,0.212-0.043,0.423-0.127,0.635
                c-0.889,4.148-1.27,8.908-1.143,14.283c0.042,1.313-0.571,1.968-1.841,1.968c-1.186,0-2.011-0.571-2.476-1.714
                c-1.186-2.962-2.222-4.972-3.11-6.031c-1.354-1.608-3.301-2.624-5.84-3.047c-2.031-0.381-9.184-0.571-21.455-0.571
                c-1.396,0-2.285,0.233-2.666,0.698c-0.212,0.254-0.317,0.889-0.317,1.904v26.534c0,1.059,0.613,1.587,1.841,1.587
                c3.893-0.084,9.479-0.359,16.758-0.825c1.27-0.127,2.2-0.74,2.793-1.841c0.465-0.846,0.952-2.603,1.46-5.269
                c0.381-1.819,1.375-2.476,2.983-1.968c1.438,0.254,2.052,0.91,1.841,1.968c-1.186,5.756-1.566,13.246-1.143,22.471
                c0.042,1.016-0.656,1.63-2.095,1.841c-1.27,0.17-2.011-0.528-2.222-2.095c-0.424-3.258-0.963-5.405-1.618-6.443
                c-0.657-1.036-1.895-1.66-3.714-1.872c-3.471-0.423-8.718-0.635-15.742-0.635c-0.762,0-1.143,0.297-1.143,0.889v27.676
                c0,3.936,2.285,6.348,6.855,7.236c1.143,0.212,5.099,0.317,11.87,0.317c10.537,0,17.117-3.682,19.741-11.045
                c0.635-1.734,1.671-2.306,3.11-1.714C469.257,185.159,469.787,185.942,469.491,187.169z" />
              <path class="st0" d="M549.852,187.169c-1.186,5.036-1.968,10.114-2.349,15.234c-0.043,0.804-1.333,1.143-3.872,1.016
                c-6.602-0.339-15.023-0.508-25.264-0.508c-11.257,0-20.947,0.211-29.072,0.635c-1.82,0.084-2.729-0.655-2.729-2.222
                c0-1.1,0.909-1.734,2.729-1.904c2.539-0.296,4.168-0.782,4.888-1.46c0.889-0.846,1.333-2.623,1.333-5.332v-58.462
                c0-3.936-0.36-6.421-1.079-7.458c-0.72-1.037-2.709-2.063-5.967-3.079c-1.735-0.549-2.37-1.587-1.904-3.11
                c0.211-0.803,0.55-1.248,1.016-1.333c0.423-0.127,1.544-0.042,3.364,0.254c2.708,0.423,9.775,0.635,21.201,0.635
                c11.383,0,21.18-0.254,29.39-0.762c2.75-0.168,4.126,0.022,4.126,0.571c0,0.212-0.043,0.423-0.127,0.635
                c-0.889,4.148-1.27,8.908-1.143,14.283c0.042,1.313-0.571,1.968-1.841,1.968c-1.186,0-2.011-0.571-2.476-1.714
                c-1.186-2.962-2.222-4.972-3.11-6.031c-1.354-1.608-3.301-2.624-5.84-3.047c-2.031-0.381-9.184-0.571-21.455-0.571
                c-1.396,0-2.285,0.233-2.666,0.698c-0.212,0.254-0.317,0.889-0.317,1.904v26.534c0,1.059,0.613,1.587,1.841,1.587
                c3.893-0.084,9.479-0.359,16.758-0.825c1.27-0.127,2.2-0.74,2.793-1.841c0.465-0.846,0.952-2.603,1.46-5.269
                c0.381-1.819,1.375-2.476,2.983-1.968c1.438,0.254,2.052,0.91,1.841,1.968c-1.186,5.756-1.566,13.246-1.143,22.471
                c0.042,1.016-0.656,1.63-2.095,1.841c-1.27,0.17-2.011-0.528-2.222-2.095c-0.424-3.258-0.963-5.405-1.618-6.443
                c-0.657-1.036-1.895-1.66-3.714-1.872c-3.471-0.423-8.718-0.635-15.742-0.635c-0.762,0-1.143,0.297-1.143,0.889v27.676
                c0,3.936,2.285,6.348,6.855,7.236c1.143,0.212,5.099,0.317,11.87,0.317c10.537,0,17.117-3.682,19.741-11.045
                c0.635-1.734,1.671-2.306,3.11-1.714C549.619,185.159,550.148,185.942,549.852,187.169z" />
              <path class="st0" d="M662.079,120.772c0,1.058-1.143,1.926-3.428,2.603c-5.078,1.439-7.617,4.38-7.617,8.823v45.64
                c0,9.606,0.127,17.351,0.381,23.232c0.084,2.242-0.444,3.512-1.587,3.809c-1.904,0.465-3.513-0.529-4.824-2.983
                c-2.116-4.02-10.41-13.922-24.883-29.707c-12.104-13.16-23.825-25.454-35.166-36.88c-0.381-0.381-0.762-0.486-1.143-0.317
                c-0.424,0.212-0.635,0.698-0.635,1.46v52.051c0,5.586,2.813,8.908,8.442,9.966c2.327,0.466,3.491,1.291,3.491,2.476
                c0,1.608-1.313,2.349-3.936,2.222c-10.072-0.423-17.9-0.423-23.486,0c-1.82,0.127-2.729-0.613-2.729-2.222
                c0-0.889,0.909-1.523,2.729-1.904c3.258-0.762,5.438-1.798,6.538-3.11c1.1-1.312,1.65-3.533,1.65-6.665v-56.177
                c0-2.454-0.508-4.337-1.523-5.649c-0.974-1.184-2.856-2.412-5.649-3.682c-2.074-0.973-3.068-1.968-2.983-2.983
                c0.127-1.143,1.079-1.587,2.856-1.333c5.501,0.762,10.262,0.931,14.282,0.508c2.073-0.211,3.936,0.571,5.586,2.349l53.193,56.685
                c0.719,0.805,1.206,1.206,1.46,1.206c0.338,0,0.508-0.571,0.508-1.714v-45.894c0-5.374-2.814-8.547-8.442-9.521
                c-1.989-0.338-2.983-0.93-2.983-1.777c0-1.777,0.909-2.56,2.729-2.349c6.939,0.762,14.684,0.677,23.232-0.254
                c1.48-0.168,2.433-0.19,2.856-0.063C661.718,118.826,662.079,119.544,662.079,120.772z" />
              <path class="st0" d="M774.94,179.488c0,8.168-3.153,14.304-9.458,18.408c-5.756,3.767-13.796,5.649-24.121,5.649
                c-1.143,0-3.862-0.127-8.157-0.381s-7.775-0.381-10.441-0.381c-4.316,0-7.724,0.254-10.22,0.762
                c-1.566,0.338-2.476-0.085-2.729-1.27c-0.254-1.058,0.655-2.01,2.729-2.856c2.369-1.016,3.914-1.925,4.634-2.729
                c1.058-1.1,1.587-2.877,1.587-5.332v-59.542c0-4.021-2.349-6.496-7.046-7.427c-2.328-0.465-3.491-1.206-3.491-2.222
                c0-1.27,0.317-2.031,0.952-2.285c0.423-0.168,1.396-0.148,2.92,0.063c1.861,0.254,4.908,0.381,9.141,0.381
                c2.327,0,6.104-0.063,11.33-0.19s8.475-0.19,9.744-0.19c7.871,0,14.07,1.482,18.599,4.443c5.078,3.301,7.617,8.188,7.617,14.664
                c0,8.633-5.248,14.621-15.742,17.964c-1.186,0.381-1.143,0.678,0.127,0.889C767.597,160.445,774.94,167.639,774.94,179.488z
                 M755.643,140.132c0-5.543-1.396-9.554-4.189-12.029c-2.793-2.476-7.279-3.714-13.457-3.714c-4.909,0-7.554,0.72-7.935,2.158
                c-0.085,0.339-0.127,0.783-0.127,1.333v27.549h5.586c7.024,0,12.134-1.185,15.329-3.555
                C754.045,149.506,755.643,145.591,755.643,140.132z M761.927,180.948c0-7.024-2.349-12.314-7.046-15.869
                c-4.021-3.047-9.268-4.57-15.742-4.57c-3.767,0-6.835,0.233-9.204,0.698v31.421c0,4.063,4.21,6.094,12.632,6.094
                C755.473,198.721,761.927,192.797,761.927,180.948z" />
              <path class="st0" d="M825.658,120.898c0,1.058-1.143,1.926-3.428,2.603c-5.121,1.523-7.681,3.513-7.681,5.967v61.763
                c0,3.979,2.349,6.391,7.046,7.236c2.327,0.424,3.491,1.249,3.491,2.476c0,1.059-0.201,1.714-0.603,1.968
                c-0.403,0.254-1.492,0.338-3.27,0.254c-11.172-0.465-19.805-0.465-25.898,0c-1.566,0.127-2.476-0.169-2.729-0.889
                c-0.085-0.296-0.127-0.74-0.127-1.333c0-0.846,0.952-1.48,2.856-1.904c3.555-0.804,5.606-1.375,6.157-1.714
                c1.354-0.846,2.031-2.581,2.031-5.205v-62.271c0-3.512-2.37-5.67-7.109-6.475c-1.989-0.338-2.983-0.952-2.983-1.841
                c0-1.227,0.158-1.978,0.477-2.253c0.316-0.275,1.067-0.349,2.253-0.222c8.252,0.889,16.778,0.804,25.581-0.254
                c1.65-0.211,2.623-0.275,2.92-0.19C825.319,118.826,825.658,119.587,825.658,120.898z" />
              <path class="st0" d="M923.158,139.752c-0.043,0.762-0.138,1.28-0.286,1.556s-0.582,0.476-1.301,0.603
                c-1.566,0.339-2.603-0.254-3.11-1.777c-1.82-5.628-3.979-9.374-6.475-11.236c-3.471-2.581-9.543-3.872-18.218-3.872
                c-3.513,0-5.438,0.381-5.776,1.143c-0.127,0.254-0.19,0.614-0.19,1.079v63.287c0,2.709,0.635,4.603,1.904,5.681
                c1.27,1.08,3.787,2.063,7.554,2.952c1.607,0.339,2.518,0.571,2.729,0.698c0.592,0.381,0.804,1.186,0.635,2.412
                c-0.127,0.973-0.593,1.502-1.396,1.587c-0.085,0.042-0.952-0.021-2.603-0.19c-11.172-0.973-20.397-1.016-27.676-0.127
                c-1.735,0.211-2.856,0.211-3.364,0c-0.424-0.212-0.698-0.719-0.825-1.523c-0.339-1.354,0.401-2.264,2.222-2.729
                c3.639-0.931,6.094-2.052,7.363-3.364c1.438-1.48,2.158-3.872,2.158-7.173v-61.509c0-1.227-0.762-1.946-2.285-2.158
                c-0.17-0.042-1.418-0.063-3.745-0.063c-8.041,0-13.965,1.396-17.773,4.189c-2.878,2.074-5.438,5.883-7.681,11.426
                c-0.72,1.735-1.714,2.307-2.983,1.714c-1.439-0.338-1.968-1.121-1.587-2.349c1.48-4.57,2.222-11.024,2.222-19.361
                c0-0.973,1.29-1.375,3.872-1.206c9.141,0.593,19.254,0.889,30.342,0.889c20.989,0,34.595-0.422,40.815-1.27
                c2.369-0.338,3.66,0.042,3.872,1.143C922.755,125.829,923.285,132.346,923.158,139.752z" />
              <path class="st0" d="M1023.768,201.768c-0.254,1.143-0.529,1.819-0.825,2.031c-0.254,0.169-0.847,0.127-1.777-0.127
                c-6.052-1.1-14.896-1.227-26.533-0.381c-2.201,0.169-3.407-0.254-3.618-1.27c-0.212-1.185,0.486-2.095,2.095-2.729
                c4.57-1.861,6.855-3.597,6.855-5.205c0-0.635-0.254-1.544-0.762-2.729c-3.132-7.49-5.734-13.521-7.808-18.091
                c-3.005,0.17-8.295,0.254-15.869,0.254c-6.264,0-11.596-0.169-15.996-0.508c-1.481,3.64-3.555,8.718-6.221,15.234
                c-0.593,1.481-0.889,2.814-0.889,3.999c0,2.37,1.29,4.105,3.872,5.205c3.978,1.693,5.924,2.983,5.84,3.872
                c-0.085,1.439-1.418,2.01-3.999,1.714c-7.956-0.846-15.319-0.592-22.09,0.762c-1.777,0.381-2.772-0.254-2.983-1.904
                c-0.17-1.1,1.206-2.285,4.126-3.555c3.131-1.312,5.776-4.337,7.935-9.077c8.252-17.9,13.584-29.664,15.996-35.293
                c5.84-13.499,9.966-24.523,12.378-33.072c0.338-1.311,2.01-2.539,5.015-3.682c0.719-0.254,1.629,0.974,2.729,3.682
                c9.141,22.006,19.381,45.535,30.723,70.586c1.819,3.979,4.888,6.623,9.204,7.935
                C1023.112,199.97,1023.979,200.752,1023.768,201.768z M989.3,168.316c-2.793-6.348-7.152-16.187-13.076-29.517
                c-0.339-0.719-0.72-1.079-1.143-1.079c-0.424,0-0.783,0.36-1.079,1.079l-12.124,29.263c4.527,0.339,9.605,0.508,15.234,0.508
                C980.583,168.57,984.645,168.486,989.3,168.316z" />
              <path class="st0" d="M1116.38,182.344c-0.551,5.629-1.46,10.178-2.729,13.647c-0.847,2.243-4.105,4.253-9.775,6.03
                c-6.179,1.904-13.288,2.856-21.328,2.856c-13.288,0-24.354-3.956-33.198-11.87c-8.972-8.04-13.457-18.345-13.457-30.913
                c0-12.822,4.634-23.486,13.901-31.993c8.929-8.209,19.72-12.314,32.373-12.314c8.971,0,16.504,1.079,22.598,3.237
                c5.416,1.904,8.23,3.682,8.442,5.332c0.465,3.217,0.698,8.443,0.698,15.679c0,1.186-1.079,1.884-3.237,2.095
                c-1.65,0.17-2.666-0.338-3.047-1.523c-2.243-7.236-5.237-12.251-8.981-15.044c-3.746-2.793-9.363-4.189-16.854-4.189
                c-9.395,0-17.055,3.11-22.979,9.331c-6.433,6.772-9.648,16.04-9.648,27.803c0,11.68,3.385,21.117,10.156,28.311
                c6.602,7.067,15.044,10.601,25.327,10.601c6.686,0,11.954-1.438,15.806-4.316c3.682-2.75,6.686-7.257,9.014-13.521
                c0.677-1.819,2.2-2.476,4.57-1.968C1115.724,179.996,1116.507,180.906,1116.38,182.344z" />
              <path class="st0" d="M1224.671,161.207c0,12.23-4.528,22.598-13.584,31.104c-8.887,8.379-19.572,12.568-32.056,12.568
                c-13.119,0-24.016-3.936-32.69-11.807c-8.887-8.125-13.33-18.619-13.33-31.484c0-12.441,4.507-22.894,13.521-31.358
                c8.887-8.293,19.72-12.441,32.5-12.441c13.033,0,23.867,4.042,32.5,12.124C1220.292,138.123,1224.671,148.554,1224.671,161.207z
                 M1211.786,163.365c0-12.314-3.364-22.047-10.093-29.2c-6.475-6.855-15.023-10.283-25.645-10.283
                c-8.803,0-16.028,3.248-21.677,9.743c-5.65,6.498-8.475,14.95-8.475,25.36c0,12.484,3.279,22.302,9.839,29.453
                c6.39,6.94,15.064,10.41,26.025,10.41c8.844,0,16.06-3.258,21.646-9.775C1208.993,182.556,1211.786,173.987,1211.786,163.365z" />
              <path class="st0" d="M1316.078,203.165c0.042,0.973-0.783,1.46-2.476,1.46c-15.192,0-29.538-13.013-43.037-39.038
                c-5.205,0.254-7.978,0.381-8.315,0.381v26.66c0,1.989,0.486,3.312,1.46,3.967c0.973,0.657,3.131,1.238,6.475,1.746
                c2.327,0.381,3.491,1.206,3.491,2.476c0,1.059-0.19,1.714-0.571,1.968s-1.439,0.338-3.174,0.254
                c-7.66-0.338-16.018-0.169-25.073,0.508c-1.82,0.127-2.729-0.613-2.729-2.222c0-1.1,0.909-1.734,2.729-1.904
                c4.146-0.423,6.221-2.687,6.221-6.792v-60.811c0-4.021-2.349-6.496-7.046-7.427c-2.328-0.465-3.491-1.206-3.491-2.222
                c0-1.565,0.782-2.349,2.349-2.349c0.465,0,0.973,0.042,1.523,0.127c1.734,0.254,4.38,0.381,7.935,0.381
                c1.185,0,4.168-0.063,8.95-0.19c4.781-0.127,9.225-0.19,13.33-0.19c8.463,0,15.149,1.587,20.059,4.761
                c5.501,3.513,8.252,8.696,8.252,15.552c0,11.723-6.771,19.467-20.313,23.232c4.316,9.818,9.395,18.239,15.234,25.264
                c5.967,7.194,11.341,11.172,16.123,11.934C1315.294,200.901,1315.993,201.726,1316.078,203.165z M1290.56,141.783
                c0-6.263-1.608-10.728-4.824-13.394c-3.217-2.666-8.358-3.999-15.425-3.999c-3.174,0-5.312,0.435-6.411,1.301
                c-1.101,0.868-1.65,2.741-1.65,5.618v29.898c10.24-0.338,17.604-2.137,22.09-5.396
                C1288.486,152.807,1290.56,148.13,1290.56,141.783z" />
              <path class="st0" d="M1413.133,201.768c-0.254,1.143-0.529,1.819-0.825,2.031c-0.254,0.169-0.847,0.127-1.777-0.127
                c-6.052-1.1-14.896-1.227-26.533-0.381c-2.201,0.169-3.407-0.254-3.618-1.27c-0.212-1.185,0.486-2.095,2.095-2.729
                c4.57-1.861,6.855-3.597,6.855-5.205c0-0.635-0.254-1.544-0.762-2.729c-3.132-7.49-5.734-13.521-7.808-18.091
                c-3.005,0.17-8.295,0.254-15.869,0.254c-6.264,0-11.596-0.169-15.996-0.508c-1.481,3.64-3.555,8.718-6.221,15.234
                c-0.593,1.481-0.889,2.814-0.889,3.999c0,2.37,1.29,4.105,3.872,5.205c3.978,1.693,5.924,2.983,5.84,3.872
                c-0.085,1.439-1.418,2.01-3.999,1.714c-7.956-0.846-15.319-0.592-22.09,0.762c-1.777,0.381-2.772-0.254-2.983-1.904
                c-0.17-1.1,1.206-2.285,4.126-3.555c3.131-1.312,5.776-4.337,7.935-9.077c8.252-17.9,13.584-29.664,15.996-35.293
                c5.84-13.499,9.966-24.523,12.378-33.072c0.338-1.311,2.01-2.539,5.015-3.682c0.719-0.254,1.629,0.974,2.729,3.682
                c9.141,22.006,19.381,45.535,30.723,70.586c1.819,3.979,4.888,6.623,9.204,7.935
                C1412.477,199.97,1413.344,200.752,1413.133,201.768z M1378.666,168.316c-2.793-6.348-7.152-16.187-13.076-29.517
                c-0.339-0.719-0.72-1.079-1.143-1.079c-0.424,0-0.783,0.36-1.079,1.079l-12.124,29.263c4.527,0.339,9.605,0.508,15.234,0.508
                C1369.948,168.57,1374.01,168.486,1378.666,168.316z" />
              <path class="Acento" d="M991.225,90.62c0,0.804-0.466,1.926-1.396,3.364c-5.036,6.137-10.453,11.723-16.25,16.758
                c-0.889,0.762-2.031,0.72-3.428-0.127c-0.974-0.592-1.228-1.185-0.762-1.777c2.496-3.343,4.803-7.574,6.919-12.696
                c1.988-4.782,3.237-7.448,3.745-7.998c1.143-1.227,2.179-1.841,3.11-1.841c1.692,0,3.491,0.55,5.396,1.65
                C990.337,89.012,991.225,89.901,991.225,90.62z" />
            </g>
          </svg>

        </a>
      </div>

      <div id="nav-menu-icon">
        <div id="menu-icon">MENU</div>
      </div>
      <div id="nav-menu">
        <div id="nav-search">
          <?php get_search_form(); ?>
        </div>
        <?php
        wp_nav_menu(
          array(
            'theme_location' => 'primary',
            'menu_class' => 'nav-list',
            'container'  => false,
          )
        );
        ?>
      </div>
      <div id="nav-icons-container">
        <div id="nav-search-icon">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" id="search-close-icon" class="nav-icon">
            <path class="search-icon" d="M443.5 420.2L336.7 312.4c20.9-26.2 33.5-59.4 33.5-95.5 0-84.5-68.5-153-153.1-153S64 132.5 64 217s68.5 153 153.1 153c36.6 0 70.1-12.8 96.5-34.2l106.1 107.1c3.2 3.4 7.6 5.1 11.9 5.1 4.1 0 8.2-1.5 11.3-4.5 6.6-6.3 6.8-16.7.6-23.3zm-226.4-83.1c-32.1 0-62.3-12.5-85-35.2-22.7-22.7-35.2-52.9-35.2-84.9 0-32.1 12.5-62.3 35.2-84.9 22.7-22.7 52.9-35.2 85-35.2s62.3 12.5 85 35.2c22.7 22.7 35.2 52.9 35.2 84.9 0 32.1-12.5 62.3-35.2 84.9-22.7 22.7-52.9 35.2-85 35.2z" />
            <path class="close-icon" d="M405 136.798L375.202 107 256 226.202 136.798 107 107 136.798 226.202 256 107 375.202 136.798 405 256 285.798 375.202 405 405 375.202 285.798 256z" />
          </svg>
        </div>
        <div id="nav-night-mode">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" id="moon-sun-icon" class="nav-icon">
            <path class="moon-icon" d="M401.4 354.2c-2.9.1-5.8.2-8.7.2-47.9 0-93-18.9-126.8-53.4-33.9-34.4-52.5-80.1-52.5-128.8 0-27.7 6.1-54.5 17.5-78.7 3.1-6.6 9.3-16.6 13.6-23.4 1.9-2.9-.5-6.7-3.9-6.1-6 .9-15.2 2.9-27.7 6.8C135.1 95.5 80 168.7 80 255c0 106.6 85.1 193 190.1 193 58 0 110-26.4 144.9-68.1 6-7.2 11.5-13.8 16.4-21.8 1.8-3-.7-6.7-4.1-6.1-8.5 1.7-17.1 1.8-25.9 2.2z" />

            <path class="sun-icon" d="M277.3 32h-42.7v64h42.7V32zm129.1 43.7L368 114.1l29.9 29.9 38.4-38.4-29.9-29.9zm-300.8 0l-29.9 29.9 38.4 38.4 29.9-29.9-38.4-38.4zM256 128c-70.4 0-128 57.6-128 128s57.6 128 128 128 128-57.6 128-128-57.6-128-128-128zm224 106.7h-64v42.7h64v-42.7zm-384 0H32v42.7h64v-42.7zM397.9 368L368 397.9l38.4 38.4 29.9-29.9-38.4-38.4zm-283.8 0l-38.4 38.4 29.9 29.9 38.4-38.4-29.9-29.9zm163.2 48h-42.7v64h42.7v-64z" />
          </svg>
        </div>
        <ul class="nav-lang-container">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" id="world-icon" class="nav-icon">
            <path d="M256 48C141.124 48 48 141.125 48 256s93.124 208 208 208c114.875 0 208-93.125 208-208S370.875 48 256 48zm-21.549 384.999c-39.464-4.726-75.978-22.392-104.519-50.932C96.258 348.393 77.714 303.622 77.714 256c0-42.87 15.036-83.424 42.601-115.659.71 8.517 2.463 17.648 2.014 24.175-1.64 23.795-3.988 38.687 9.94 58.762 5.426 7.819 6.759 19.028 9.4 28.078 2.583 8.854 12.902 13.498 20.019 18.953 14.359 11.009 28.096 23.805 43.322 33.494 10.049 6.395 16.326 9.576 13.383 21.839-2.367 9.862-3.028 15.937-8.13 24.723-1.557 2.681 5.877 19.918 8.351 22.392 7.498 7.497 14.938 14.375 23.111 21.125 12.671 10.469-1.231 24.072-7.274 39.117zm147.616-50.932c-25.633 25.633-57.699 42.486-92.556 49.081 4.94-12.216 13.736-23.07 21.895-29.362 7.097-5.476 15.986-16.009 19.693-24.352 3.704-8.332 8.611-15.555 13.577-23.217 7.065-10.899-17.419-27.336-25.353-30.781-17.854-7.751-31.294-18.21-47.161-29.375-11.305-7.954-34.257 4.154-47.02-1.417-17.481-7.633-31.883-20.896-47.078-32.339-15.68-11.809-14.922-25.576-14.922-42.997 12.282.453 29.754-3.399 37.908 6.478 2.573 3.117 11.42 17.042 17.342 12.094 4.838-4.043-3.585-20.249-5.212-24.059-5.005-11.715 11.404-16.284 19.803-24.228 10.96-10.364 34.47-26.618 32.612-34.047s-23.524-28.477-36.249-25.193c-1.907.492-18.697 18.097-21.941 20.859.086-5.746.172-11.491.26-17.237.055-3.628-6.768-7.352-6.451-9.692.8-5.914 17.262-16.647 21.357-21.357-2.869-1.793-12.659-10.202-15.622-8.968-7.174 2.99-15.276 5.05-22.45 8.039 0-2.488-.302-4.825-.662-7.133a176.585 176.585 0 0 1 45.31-13.152l14.084 5.66 9.944 11.801 9.924 10.233 8.675 2.795 13.779-12.995L282 87.929V79.59c27.25 3.958 52.984 14.124 75.522 29.8-4.032.361-8.463.954-13.462 1.59-2.065-1.22-4.714-1.774-6.965-2.623 6.531 14.042 13.343 27.89 20.264 41.746 7.393 14.801 23.793 30.677 26.673 46.301 3.394 18.416 1.039 35.144 2.896 56.811 1.788 20.865 23.524 44.572 23.524 44.572s10.037 3.419 18.384 2.228c-7.781 30.783-23.733 59.014-46.769 82.052z" />
          </svg>
          <?php if (function_exists('pll_the_languages')) {
            pll_the_languages(array('hide_current' => 1, 'display_names_as' => 'slug'));
          }
          ?>
        </ul>
      </div>

    </div>
  </nav>
  <div id="content">
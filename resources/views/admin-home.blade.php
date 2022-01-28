<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Safarnama - Admin</title>

    <link rel="stylesheet" href="{{url('css/raj.css')}}">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    

    <!-- Bootstrap core CSS -->
<link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet">

    <style>
      a {
    color: black;
    text-decoration: none;
}
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="{{url('css/sidebars.css')}}" rel="stylesheet">
    
  </head>
  <body>
    
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="bootstrap" viewBox="0 0 118 94">
    <title>Bootstrap</title>
    <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path>
  </symbol>
  <symbol id="home" viewBox="0 0 16 16">
    <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
  </symbol>
  <symbol id="speedometer2" viewBox="0 0 16 16">
    <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
    <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"/>
  </symbol>
  <symbol id="table" viewBox="0 0 16 16">
    <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z"/>
  </symbol>
  <symbol id="people-circle" viewBox="0 0 16 16">
    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
  </symbol>
  <symbol id="grid" viewBox="0 0 16 16">
    <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"/>
  </symbol>
  <symbol id="collection" viewBox="0 0 16 16">
    <path d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-11zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6v7zm1.5.5A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13z"/>
  </symbol>
  <symbol id="calendar3" viewBox="0 0 16 16">
    <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"/>
    <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
  </symbol>
  <symbol id="chat-quote-fill" viewBox="0 0 16 16">
    <path d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM7.194 6.766a1.688 1.688 0 0 0-.227-.272 1.467 1.467 0 0 0-.469-.324l-.008-.004A1.785 1.785 0 0 0 5.734 6C4.776 6 4 6.746 4 7.667c0 .92.776 1.666 1.734 1.666.343 0 .662-.095.931-.26-.137.389-.39.804-.81 1.22a.405.405 0 0 0 .011.59c.173.16.447.155.614-.01 1.334-1.329 1.37-2.758.941-3.706a2.461 2.461 0 0 0-.227-.4zM11 9.073c-.136.389-.39.804-.81 1.22a.405.405 0 0 0 .012.59c.172.16.446.155.613-.01 1.334-1.329 1.37-2.758.942-3.706a2.466 2.466 0 0 0-.228-.4 1.686 1.686 0 0 0-.227-.273 1.466 1.466 0 0 0-.469-.324l-.008-.004A1.785 1.785 0 0 0 10.07 6c-.957 0-1.734.746-1.734 1.667 0 .92.777 1.666 1.734 1.666.343 0 .662-.095.931-.26z"/>
  </symbol>
  <symbol id="cpu-fill" viewBox="0 0 16 16">
    <path d="M6.5 6a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"/>
    <path d="M5.5.5a.5.5 0 0 0-1 0V2A2.5 2.5 0 0 0 2 4.5H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2A2.5 2.5 0 0 0 4.5 14v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14a2.5 2.5 0 0 0 2.5-2.5h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14A2.5 2.5 0 0 0 11.5 2V.5a.5.5 0 0 0-1 0V2h-1V.5a.5.5 0 0 0-1 0V2h-1V.5a.5.5 0 0 0-1 0V2h-1V.5zm1 4.5h3A1.5 1.5 0 0 1 11 6.5v3A1.5 1.5 0 0 1 9.5 11h-3A1.5 1.5 0 0 1 5 9.5v-3A1.5 1.5 0 0 1 6.5 5z"/>
  </symbol>
  <symbol id="gear-fill" viewBox="0 0 16 16">
    <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
  </symbol>
  <symbol id="speedometer" viewBox="0 0 16 16">
    <path d="M8 2a.5.5 0 0 1 .5.5V4a.5.5 0 0 1-1 0V2.5A.5.5 0 0 1 8 2zM3.732 3.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 8a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 7.31A.91.91 0 1 0 8.85 8.569l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
    <path fill-rule="evenodd" d="M6.664 15.889A8 8 0 1 1 9.336.11a8 8 0 0 1-2.672 15.78zm-4.665-4.283A11.945 11.945 0 0 1 8 10c2.186 0 4.236.585 6.001 1.606a7 7 0 1 0-12.002 0z"/>
  </symbol>
  <symbol id="toggles2" viewBox="0 0 16 16">
    <path d="M9.465 10H12a2 2 0 1 1 0 4H9.465c.34-.588.535-1.271.535-2 0-.729-.195-1.412-.535-2z"/>
    <path d="M6 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 1a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm.535-10a3.975 3.975 0 0 1-.409-1H4a1 1 0 0 1 0-2h2.126c.091-.355.23-.69.41-1H4a2 2 0 1 0 0 4h2.535z"/>
    <path d="M14 4a4 4 0 1 1-8 0 4 4 0 0 1 8 0z"/>
  </symbol>
  <symbol id="tools" viewBox="0 0 16 16">
    <path d="M1 0L0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.356 3.356a1 1 0 0 0 1.414 0l1.586-1.586a1 1 0 0 0 0-1.414l-3.356-3.356a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0zm9.646 10.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708zM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11z"/>
  </symbol>
  <symbol id="chevron-right" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
  </symbol>
  <symbol id="geo-fill" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z"/>
  </symbol>
</svg>

<main>
  <div class="b-example-divider p-0"></div>

  <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 250px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
      <span class="fs-4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| Safarnama ||</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="{{route('dashboard')}}" class="nav-link link-dark active" aria-current="page">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"/></svg>
          Home
        </a>
      </li>
      <li>
        <a href="{{route('admin-user-blog')}}" class="nav-link link-dark">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
          User's Blogs
        </a>
      </li>
      <li>
        <a href="{{route('admin-package-list')}}" class="nav-link link-dark">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"/></svg>
          Package List
        </a>
      </li>
      <li>
        <a href="{{route('admin-add-package')}}" class="nav-link link-dark">
            <svg class="bi me-2" width="16" height="16">
                <use xlink:href="#grid" />
            </svg>
            Add Packages
        </a>
    </li>
      <li>
        <a href="{{route('admin-user-management')}}" class="nav-link link-dark">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
          User Management
        </a>
      </li>
      <li>
        <a href="{{route('admin-booking')}}" class="nav-link link-dark">
          <i class='fas fa-hotel'></i>
          Bookings
        </a>
      </li>
    </ul>
    <hr>
    <div class="dropdown">
      <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="data:image/jpeg;base64,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" alt="" width="32" height="32" class="rounded-circle me-2">
        <strong>Safarnama</strong>
      </a>
      <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
        <li>
          <form action="{{ route('logout') }}" method="post">
            @csrf
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" class="ms-3"><span>Logout</span></a>
        </form>
        </li>
      </ul>
    </div>  
  </div>
  <div class="card w-25 bg-primary" style="height: 10rem;margin-top: 3rem;margin-left: 10px;">
    <div class="card-body " style="margin-top:3rem ">
      <h5 class="card-title">Users <i class="fa fa-user h1"> </i></h5>
      @php
          echo '<h3>'.$home['user'].'</h3>';
      @endphp
    </div>
  </div>
  <div class="card w-25 bg-secondary" style="height: 10rem;margin-top: 3rem;margin-left: 10px;">
    <div class="card-body" style="margin-top:3rem ">
      <h5 class="card-title">Posts <svg class="bi me-2" width="40" height="40"><use xlink:href="#speedometer2"/></svg> </i></h5>
      @php
          echo '<h3>'.$home['post'].'</h3>';
      @endphp  
      
    </div>
  </div>
  <div class="card w-25 bg-warning" style="height: 10rem;margin-top: 3rem;margin-left: 10px;">
    <div class="card-body" style="margin-top:3rem ">
      <h5 class="card-title">Packages  <svg class="bi me-2" width="40" height="40"><use xlink:href="#grid" /></svg></h5>
      @php
          echo '<h3>'.$home['package'].'</h3>';
          @endphp 
    </div>
  </div>
  <div class="card w-25 bg-danger" style="height: 10rem;margin-top: 3rem;margin-left: 10px;">
    <div class="card-body" style="margin-top:3rem ">
      <h5 class="card-title">Bookings <svg class="bi me-2" width="40" height="40"><use xlink:href="#table"/></svg></h5>
      @php
          echo '<h3>'.$home['booking'].'</h3>';
      @endphp 
    </div>
  
  </div>  
</main>
      <script src="{{url('js/sidebars.js')}}"></script>
      <script src="{{url('js/bootstrap.bundle.min.js')}}"></script>
      <script>
        $(document).ready(function() {
          $('#table').DataTable();
      } );
       </script>
  </body>
</html>

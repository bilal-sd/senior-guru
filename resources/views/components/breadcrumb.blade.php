<div class="container-fluid">
    <div class="page-header">
      <div class="row">
        <div class="col-lg-6">
          {{ $breadcrumb_title ?? '' }}
         

          <ol class="breadcrumb">
              {{ $slot ?? ''}}
          </ol>
        </div>
<<<<<<< HEAD
        
        
        <div class="col-lg-6">
          <!-- Bookmark Start-->
          <div class="bookmark">
            <ul>
              <li>
                {{ $right_button ?? '' }}
              </li>
            </ul>
          </div>
          <!-- Bookmark Ends-->
=======
        <div class="col-lg-6 text-end">
            {{$right_button ?? ''}}
>>>>>>> ed12f0e457440bc355645b7ee602dfee58335f92
        </div>
      </div>
    </div>
</div>
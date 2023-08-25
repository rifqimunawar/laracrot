
        <!-- app footer -->
        <div class="appFooter">
          <div class="footer-title">
              Copyright © PMII Uninus 2023. All Rights Reserved.
          </div>
          {{-- Bootstrap 5 based mobile template. --}}
      </div>
      <!-- * app footer -->

  </div>
  <!-- * App Capsule -->

  <!-- App Bottom Menu -->
  <div class="appBottomMenu">
   <a href="{{ route('homepage') }}" class="item {{ request()->is('mobile') ? ' active' : '' }} ">
    <div class="col">
        <ion-icon name="pulse-outline"></ion-icon>
        {{-- <strong>Item 1</strong> --}}
    </div>
</a>
<a href="{{ route('search') }}" class="item {{ request()->is('mobile/search*') ? ' active' : '' }} ">
    <div class="col">
        <ion-icon name="search-outline"></ion-icon>
        {{-- <strong>Item 2</strong> --}}
    </div>
</a>
<a href="" class="item">
    <div class="col">
        <div class="action-button large">
            <ion-icon name="arrow-up-outline"></ion-icon>
        </div>
    </div>
</a>
<a href="#" class="item">
    <div class="col">
        <ion-icon name="calendar-outline"></ion-icon>
        {{-- <strong>Item 4</strong> --}}
    </div>
</a>
<a href="#" class="item">
    <div class="col">
        <ion-icon name="settings-outline"></ion-icon>
        {{-- <strong>Item 5</strong> --}}
    </div>
</a>
  </div>
  <!-- * App Bottom Menu -->

<header class="mainHeader btClear ">
   <div class="mainHeaderInner">
      <div class="btLogoArea menuHolder btClear">
         <div class="port">
            <div class="btHorizontalMenuTrigger">
               &nbsp;
               <div class="bt_bb_icon bt_bb_text_empty" data-bt-override-class="{}"><a href="#" target="_self"   data-ico-fa="&#xf0c9;" class="bt_bb_icon_holder"></a></div>
            </div>
            <div class="logo">
               <span>
               <a href="{{ url('/')}}">
                  <img class="btMainLogo" style="padding: 10px;" data-hw="2.4166666666667" src="{{asset('wp-content/uploads/logo/logo_white.png')}}" alt="logo">
                  <img class="btAltLogo" style="padding: 10px;" src="{{asset('wp-content/uploads/logo/logo_black.png')}}" alt="logo">
               </a>                 
               </span>
            </div>
            <!-- /logo -->
            <div class="menuPort">
               <div class="topBarInMenu">
                  <div class="topBarInMenuCell">
                     <div class="btButtonWidget  btFilledButton  btAccentGradientButton  btWithIcon  btWithLink">
                        <a href="tel:+919825897100" target="_self" class="btButtonWidgetLink">
                           <div class="btButtonWidgetIcon"><span  data-ico-dripicons="&#xe98e;" class="bt_bb_icon_holder"></span></div>
                           <div class="btButtonWidgetContent">
                              <span class="btButtonWidgetText">
                              +91 98258 97100
                              </span>
                           </div>
                        </a>
                     </div>
                  </div>
               </div>
               <nav>
                  <ul id="menu-primary-menu" class="menu">
                     <li id="menu-item-1579" class="menu-item menu-item-type-post_type menu-item-object-page current-page-ancestor current-page-parent menu-item-1582">
                        <a href="{{ url('/')}}">Home</a>
                     </li>
                     <li id="menu-item-43" class="menu-item menu-item-type-post_type menu-item-object-page current-page-ancestor current-page-parent menu-item-1582">
                        <a href="{{ route('about-us')}}">About</a>
                     </li>
                     <li id="menu-item-1580" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1580">
                        <a href="{{ route('services')}}">Services</a>
                     </li>
                     <li id="menu-item-1579" class="menu-item menu-item-type-post_type menu-item-object-page current-page-ancestor current-page-parent menu-item-1582">
                        <a href="{{ route('portfolio')}}">Portfolio</a>
                     </li>
                     <li id="menu-item-1579" class="menu-item menu-item-type-post_type menu-item-object-page current-page-ancestor current-page-parent menu-item-1582">
                        <a href="{{ route('contact')}}">Contact Us</a>
                     </li>
                  </ul>
               </nav>
            </div>
         </div>
      </div>
   </div>
</header>
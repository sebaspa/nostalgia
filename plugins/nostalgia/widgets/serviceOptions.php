<?php

class serviceOptionsMapWidget extends WP_Widget
{

  public function __construct()
  {
    parent::__construct(
      'serviceOptionsMapWidget',
      __('serviceOptions', 'nostalgia'),
      array(
        'description' => __('Show servide options', 'nostalgia')
      )
    );
  }

  public function widget($args, $instance)
  {
    ?>
    <div class="w-full bg-yellow-500 py-9">
      <div class="container max-w-7xl px-4 mx-auto">
        <div class="grid grid-cols-12 gap-y-6 lg:gap-y-0 md:gap-x-8">
          <div class="col-span-12 md:col-span-6 lg:col-span-3">
            <div class="flex items-center gap-3">
              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="61" fill="currentColor" class="text-black-500">
                <g clip-path=" url(#a)">
                  <path fill="currentColor"
                    d="M46.952 3.452c-1.213 0-2.35.328-3.33.896V1.787c0-.92-.746-1.666-1.666-1.666H15.308c-.92 0-1.666.746-1.666 1.666v2.582a6.619 6.619 0 0 0-3.366-.917 6.67 6.67 0 0 0-6.662 6.662c0 2.802.83 5.51 2.401 7.83 2.674 3.95 5.972 4.974 8.7 6.066a15.07 15.07 0 0 0 8.724 8.493l-1.228 7.812h-.241a5.002 5.002 0 0 0-4.996 4.996v8.328h-1.666a1.666 1.666 0 0 0 0 3.33h26.648a1.666 1.666 0 0 0 0-3.33H40.29V45.31a5.002 5.002 0 0 0-4.996-4.996h-.242l-1.228-7.812a15.07 15.07 0 0 0 8.731-8.51c2.578-1.031 5.957-2.06 8.658-6.05a13.914 13.914 0 0 0 2.401-7.829 6.67 6.67 0 0 0-6.662-6.662ZM13.63 19.988a10.584 10.584 0 0 1-6.685-9.874 3.335 3.335 0 0 1 3.331-3.331 3.335 3.335 0 0 1 3.331 3.331c0 .117.013.231.036.341v7.986c0 .536.028 1.064.083 1.585l-.096-.038Zm23.33 33.65H20.303v-3.33H36.96v3.33Zm-1.666-9.992c.918 0 1.665.747 1.665 1.665v1.666H20.304V45.31c0-.918.748-1.665 1.666-1.665h13.324Zm-9.71-3.331 1.101-7.01a15.068 15.068 0 0 0 3.893 0l1.103 7.01h-6.098ZM40.29 18.44c0 6.429-5.23 11.659-11.658 11.659-6.429 0-11.659-5.23-11.659-11.659v-8.327H40.29v8.327Zm0-11.658H16.974v-3.33H40.29v3.33Zm3.308 13.205-.059.023c.054-.516.082-1.04.082-1.57v-8.327a3.335 3.335 0 0 1 3.331-3.331 3.335 3.335 0 0 1 3.331 3.331c0 4.374-2.624 8.25-6.685 9.874Z" />
                </g>
                <defs>
                  <clipPath id="a">
                    <path fill="currentColor" d=" M0 .121h60v60H0z" />
                  </clipPath>
                </defs>
              </svg>
              <div>
                <p class="text-xl font-noirPro-semiBold text-black-500"><?php echo __("High Quality", 'nostalgia') ?></p>
                <p class="text-base font-noirPro-regular text-black-400">
                  <?php echo __("crafted from top materials", 'nostalgia') ?>
                </p>
              </div>
            </div>
          </div>
          <div class="col-span-12 md:col-span-6 lg:col-span-3">
            <div class="flex items-center gap-3 text-black-500">
              <svg xmlns="http://www.w3.org/2000/svg" width="51" height="49" fill="currentColor">
                <path fill="currentColor"
                  d="M47.655 16.995c-.66-2.043-.379-5.11-2.093-7.477-1.729-2.387-4.735-3.065-6.432-4.307-1.68-1.228-3.242-3.901-6.067-4.823-2.745-.896-5.553.32-7.73.32-2.176 0-4.983-1.216-7.73-.32-2.824.922-4.388 3.595-6.066 4.823-1.696 1.24-4.704 1.92-6.432 4.306-1.713 2.366-1.435 5.44-2.093 7.478-.627 1.94-2.679 4.268-2.679 7.283 0 3.016 2.05 5.335 2.679 7.282.66 2.043.378 5.11 2.093 7.478 1.728 2.386 4.734 3.065 6.432 4.306 1.679 1.228 3.242 3.901 6.067 4.823 2.743.895 5.555-.32 7.73-.32 2.17 0 4.989 1.214 7.729.32 2.825-.922 4.387-3.595 6.067-4.823 1.695-1.24 4.703-1.92 6.431-4.306 1.714-2.366 1.435-5.44 2.094-7.478.627-1.94 2.678-4.268 2.678-7.282 0-3.017-2.048-5.335-2.678-7.283ZM43.938 30.36c-.769 2.38-.567 5.044-1.54 6.387-.986 1.362-3.576 1.983-5.574 3.445-1.976 1.445-3.362 3.737-4.973 4.262-1.524.498-4.008-.512-6.517-.512-2.529 0-4.987 1.012-6.518.512-1.611-.525-2.995-2.815-4.973-4.262-1.987-1.453-4.591-2.088-5.574-3.445-.97-1.338-.776-4.02-1.54-6.387-.75-2.318-2.49-4.326-2.49-6.081 0-1.758 1.739-3.758 2.49-6.082.769-2.38.567-5.044 1.54-6.387.985-1.36 3.577-1.984 5.574-3.445 1.982-1.45 3.359-3.736 4.972-4.262 1.523-.497 4.015.512 6.518.512 2.533 0 4.985-1.012 6.518-.512 1.61.525 2.995 2.816 4.973 4.262 1.986 1.453 4.591 2.088 5.574 3.445.97 1.339.775 4.018 1.54 6.387.75 2.318 2.49 4.326 2.49 6.082 0 1.757-1.74 3.758-2.49 6.081Zm-9.606-12.35c.762.762.762 1.999 0 2.762l-9.776 9.776c-.763.762-2 .762-2.762 0l-5.459-5.459a1.953 1.953 0 1 1 2.762-2.762l4.078 4.078 8.394-8.395c.763-.763 2-.763 2.763 0Z" />
              </svg>
              <div>
                <p class="text-xl font-noirPro-semiBold text-black-500">
                  <?php echo __("Warranty Protection", 'nostalgia') ?>
                </p>
                <p class="text-base font-noirPro-regular text-black-400">
                  <?php echo __("Over 2 years", 'nostalgia') ?>
                </p>
              </div>
            </div>
          </div>
          <div class="col-span-12 md:col-span-6 lg:col-span-3">
            <div class="flex items-center gap-3 text-black-500">
              <svg xmlns="http://www.w3.org/2000/svg" width="61" height="61" fill="currentColor">
                <g clip-path="url(#a)">
                  <path fill="currentColor"
                    d="M46.79 26.375V3.607a1.47 1.47 0 0 0-1.47-1.471H5.912a1.47 1.47 0 0 0-1.471 1.47V28.19a4.452 4.452 0 0 0-2.017.835c-1.934 1.371-2.392 4.441-.772 6.334l6.625 8.032c4.101 4.799 8.457 5.387 14.934 5.387 5.557 0 8.042.025 12.885-1.079l4.716-1.128c.765 1.068 1.98 1.76 3.344 1.76h2.323c2.309 0 4.187-1.979 4.187-4.41V30.771c0-2.322-1.713-4.23-3.877-4.397Zm-6.611 3.026-1.96-.996A11.652 11.652 0 0 0 28 28.24c-.893.352-2.841 1.53-3.851 1.49h-6.8a4.095 4.095 0 0 0-4.091 4.091v1.073l-.039-.04-4.856-5.27a4.477 4.477 0 0 0-.978-.8V14.19H19.42v5.392c0 .812.659 1.47 1.471 1.47h9.281a1.47 1.47 0 0 0 1.47-1.47V14.19H43.85v12.184c-1.719.133-3.152 1.362-3.67 3.026ZM22.362 14.19h6.34v3.92h-6.34v-3.92Zm21.486-2.942H31.643V5.077h12.206v6.172ZM28.701 5.077v6.172h-6.34V5.077h6.34Zm-9.281 0v6.172H7.383V5.077H19.42Zm15.994 39.76c-4.474 1.025-7.168.984-12.15.984-6.079 0-9.016-.098-12.716-4.302l-6.625-8.032c-1.152-1.5.935-3.272 2.276-1.91l4.856 5.27c1.283 1.355 2.898 2.1 4.889 2.144h13.463a1.47 1.47 0 1 0 0-2.942H16.198v-2.228c0-.633.515-1.149 1.15-1.149h6.8c1.532.11 3.743-1.17 5.09-1.764a8.725 8.725 0 0 1 7.652.121l3.08 1.565v11.154l-4.556 1.09Zm12.311-.917c0 .81-.558 1.469-1.245 1.469h-2.323c-.686 0-1.245-.659-1.245-1.469V30.772c0-.81.559-1.468 1.245-1.468h2.323c.687 0 1.245.658 1.245 1.468V43.92Z" />
                </g>
                <defs>
                  <clipPath id="a">
                    <path fill="#fff" d="M.667.121h60v60h-60z" />
                  </clipPath>
                </defs>
              </svg>
              <div>
                <p class="text-xl font-noirPro-semiBold text-black-500"><?php echo __("Free Shipping", 'nostalgia') ?></p>
                <p class="text-base font-noirPro-regular text-black-400">
                  <?php echo __("Order over 150 $", 'nostalgia') ?>
                </p>
              </div>
            </div>
          </div>
          <div class="col-span-12 md:col-span-6 lg:col-span-3">
            <div class="flex items-center gap-3 text-black-500">
              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="61" fill="currentColor">
                <g clip-path="url(#a)">
                  <path fill="currentColor"
                    d="M51.851 22.753C51.48 10.21 41.161.12 28.53.12 15.9.121 5.58 10.211 5.207 22.753L3.53 24.43v11.38l1.667 1.667v7.754c0 4.534 3.688 8.222 8.222 8.222h2.065a5.008 5.008 0 0 0 4.713 3.334h3.333a5.008 5.008 0 0 0 4.715-3.338c.095.002.19.004.285.004 8.049 0 14.783-5.735 16.332-13.333h4.359l4.31-4.31v-11.38l-1.679-1.678ZM28.53 3.454c9.893 0 18.13 7.22 19.721 16.667h-3.39c-1.548-7.598-8.282-13.333-16.33-13.333-8.05 0-14.784 5.735-16.332 13.333h-3.39C10.4 10.674 18.638 3.454 28.53 3.454Zm12.912 16.667c-5.388-.016-9.194.312-12.331-4.274l-1.524-2.227-1.309 2.359c-1.908 3.438-4.477 4.142-7.748 4.142h-2.911c1.484-5.744 6.71-10 12.911-10 6.202 0 11.428 4.256 12.912 10ZM11.863 36.788H9.22L6.863 34.43v-8.62l2.357-2.357h2.643v13.334Zm-3.334 8.444v-5.11h3.665a16.52 16.52 0 0 0 4.353 8.252 5.008 5.008 0 0 0-1.064 1.747h-2.065a4.894 4.894 0 0 1-4.889-4.889Zm15 8.222h-3.333c-.92 0-1.667-.747-1.667-1.666 0-.92.748-1.667 1.667-1.667h3.333c.92 0 1.667.748 1.667 1.667s-.748 1.666-1.667 1.666Zm18.334-16.666c0 7.352-5.982 13.333-13.334 13.333-.095 0-.192-.002-.288-.004a5.008 5.008 0 0 0-4.712-3.33c-3.422.008-3.367-.016-3.794.023a13.256 13.256 0 0 1-4.539-10.022V23.454h3.333c2.95 0 6.542-.486 9.323-3.87 3.669 3.845 8.152 3.87 12.177 3.87h1.834v13.334Zm8.333-2.357-2.357 2.357h-2.643V23.454h2.643l2.357 2.357v8.62Z" />
                </g>
                <defs>
                  <clipPath id="a">
                    <path fill="#fff" d="M0 .121h60v60H0z" />
                  </clipPath>
                </defs>
              </svg>
              <div>
                <p class="text-xl font-noirPro-semiBold text-black-500"><?php echo __("24 / 7 Support", 'nostalgia') ?></p>
                <p class="text-base font-noirPro-regular text-black-400">
                  <?php echo __("Dedicated support", 'nostalgia') ?>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
  }
  public function update($new_instance, $old_instance)
  {
  }
  public function form($instance)
  {
  }
}


register_widget('serviceOptionsMapWidget');

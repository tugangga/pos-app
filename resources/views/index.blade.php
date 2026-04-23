<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="./css/main.css" rel="stylesheet" />
    <script
      src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1"
      type="module"
    ></script>
    <script
      defer
      src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"
    ></script>

    <title>Document</title>
  </head>
  <body>
    <header class="bg-white outline-1 outline-gray-900/5">
      <nav
        aria-label="Global"
        class="mx-auto flex max-w-7xl items-center justify-between p-4 lg:px-8"
      >
        <div class="flex lg:flex-1">
          <a href="#" class="-m-1.5 p-1.5">
            <span class="sr-only">POS</span>
            <img
              src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600"
              alt=""
              class="h-8 w-auto"
            />
          </a>
        </div>

        <div class="flex lg:hidden">
          <button
            type="button"
            command="show-modal"
            commandfor="mobile-menu"
            class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700"
          >
            <span class="sr-only">Open main menu</span>
            <svg
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="1.5"
              data-slot="icon"
              aria-hidden="true"
              class="size-6"
            >
              <path
                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
            </svg>
          </button>
        </div>
        <el-popover-group class="hidden lg:flex lg:gap-x-12">
          <!-- home -->
          <a href="#" class="text-sm/6 font-semibold text-gray-900">Home</a>
          <!-- end of home -->

          <!-- Produk -->
          <div class="relative">
            <button
              popovertarget="desktop-menu-produk"
              class="flex items-center gap-x-1 text-sm/6 font-semibold text-gray-900"
            >
              Produk
              <svg
                viewBox="0 0 20 20"
                fill="currentColor"
                data-slot="icon"
                aria-hidden="true"
                class="size-5 flex-none text-gray-400"
              >
                <path
                  d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                  clip-rule="evenodd"
                  fill-rule="evenodd"
                />
              </svg>
            </button>

            <el-popover
              id="desktop-menu-produk"
              anchor="bottom"
              popover
              class="w-screen max-w-xs overflow-hidden rounded-3xl bg-white shadow-lg outline-1 outline-gray-900/5 transition transition-discrete [--anchor-gap:--spacing(3)] backdrop:bg-transparent open:block data-closed:translate-y-1 data-closed:opacity-0 data-enter:duration-200 data-enter:ease-out data-leave:duration-150 data-leave:ease-in"
            >
              <div class="p-4">
                <div
                  class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-50"
                >
                  <div
                    class="flex size-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white"
                  >
                    <svg
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="1.5"
                      data-slot="icon"
                      aria-hidden="true"
                      class="size-6 text-gray-600 group-hover:text-indigo-600"
                    >
                      <path
                        d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 0 0 2.25-2.25V6a2.25 2.25 0 0 0-2.25-2.25H6A2.25 2.25 0 0 0 3.75 6v2.25A2.25 2.25 0 0 0 6 10.5Zm0 9.75h2.25A2.25 2.25 0 0 0 10.5 18v-2.25a2.25 2.25 0 0 0-2.25-2.25H6a2.25 2.25 0 0 0-2.25 2.25V18A2.25 2.25 0 0 0 6 20.25Zm9.75-9.75H18a2.25 2.25 0 0 0 2.25-2.25V6A2.25 2.25 0 0 0 18 3.75h-2.25A2.25 2.25 0 0 0 13.5 6v2.25a2.25 2.25 0 0 0 2.25 2.25Z"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                    </svg>
                  </div>
                  <div class="">
                    <a href="#" class="block font-semibold text-gray-900">
                      Tambah Data
                      <span class="absolute inset-0"></span>
                    </a>
                  </div>
                </div>
                <div
                  class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-50"
                >
                  <div
                    class="flex size-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white"
                  >
                    <svg
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="1.5"
                      data-slot="icon"
                      aria-hidden="true"
                      class="size-6 text-gray-600 group-hover:text-indigo-600"
                    >
                      <path
                        d="M15.042 21.672 13.684 16.6m0 0-2.51 2.225.569-9.47 5.227 7.917-3.286-.672ZM12 2.25V4.5m5.834.166-1.591 1.591M20.25 10.5H18M7.757 14.743l-1.59 1.59M6 10.5H3.75m4.007-4.243-1.59-1.59"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                    </svg>
                  </div>
                  <div class="">
                    <a href="#" class="block font-semibold text-gray-900">
                      Manajemen Data
                      <span class="absolute inset-0"></span>
                    </a>
                  </div>
                </div>
                <div
                  class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-50"
                >
                  <div
                    class="flex size-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      class="size-6"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="m18.375 12.739-7.693 7.693a4.5 4.5 0 0 1-6.364-6.364l10.94-10.94A3 3 0 1 1 19.5 7.372L8.552 18.32m.009-.01-.01.01m5.699-9.941-7.81 7.81a1.5 1.5 0 0 0 2.112 2.13"
                      />
                    </svg>
                  </div>
                  <div class="">
                    <a href="#" class="block font-semibold text-gray-900">
                      Laporan
                      <span class="absolute inset-0"></span>
                    </a>
                  </div>
                </div>
                <!--  -->
              </div>
              <!-- <div
                class="grid grid-cols-2 divide-x divide-gray-900/5 bg-gray-50"
              ></div> -->
            </el-popover>
          </div>
          <!-- End of Produk -->

          <!-- Pembelian -->
          <div class="relative">
            <button
              popovertarget="desktop-menu-pembelian"
              class="flex items-center gap-x-1 text-sm/6 font-semibold text-gray-900"
            >
              Pembelian
              <svg
                viewBox="0 0 20 20"
                fill="currentColor"
                data-slot="icon"
                aria-hidden="true"
                class="size-5 flex-none text-gray-400"
              >
                <path
                  d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                  clip-rule="evenodd"
                  fill-rule="evenodd"
                />
              </svg>
            </button>

            <el-popover
              id="desktop-menu-pembelian"
              anchor="bottom"
              popover
              class="w-screen max-w-xs overflow-hidden rounded-3xl bg-white shadow-lg outline-1 outline-gray-900/5 transition transition-discrete [--anchor-gap:--spacing(3)] backdrop:bg-transparent open:block data-closed:translate-y-1 data-closed:opacity-0 data-enter:duration-200 data-enter:ease-out data-leave:duration-150 data-leave:ease-in"
            >
              <div class="p-4">
                <div
                  class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-50"
                >
                  <div
                    class="flex size-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white"
                  >
                    <svg
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="1.5"
                      data-slot="icon"
                      aria-hidden="true"
                      class="size-6 text-gray-600 group-hover:text-indigo-600"
                    >
                      <path
                        d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 0 0 2.25-2.25V6a2.25 2.25 0 0 0-2.25-2.25H6A2.25 2.25 0 0 0 3.75 6v2.25A2.25 2.25 0 0 0 6 10.5Zm0 9.75h2.25A2.25 2.25 0 0 0 10.5 18v-2.25a2.25 2.25 0 0 0-2.25-2.25H6a2.25 2.25 0 0 0-2.25 2.25V18A2.25 2.25 0 0 0 6 20.25Zm9.75-9.75H18a2.25 2.25 0 0 0 2.25-2.25V6A2.25 2.25 0 0 0 18 3.75h-2.25A2.25 2.25 0 0 0 13.5 6v2.25a2.25 2.25 0 0 0 2.25 2.25Z"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                    </svg>
                  </div>
                  <div class="">
                    <a href="#" class="block font-semibold text-gray-900">
                      Tambah Data
                      <span class="absolute inset-0"></span>
                    </a>
                  </div>
                </div>
                <div
                  class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-50"
                >
                  <div
                    class="flex size-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white"
                  >
                    <svg
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="1.5"
                      data-slot="icon"
                      aria-hidden="true"
                      class="size-6 text-gray-600 group-hover:text-indigo-600"
                    >
                      <path
                        d="M15.042 21.672 13.684 16.6m0 0-2.51 2.225.569-9.47 5.227 7.917-3.286-.672ZM12 2.25V4.5m5.834.166-1.591 1.591M20.25 10.5H18M7.757 14.743l-1.59 1.59M6 10.5H3.75m4.007-4.243-1.59-1.59"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                    </svg>
                  </div>
                  <div class="">
                    <a href="#" class="block font-semibold text-gray-900">
                      Manajemen Data
                      <span class="absolute inset-0"></span>
                    </a>
                  </div>
                </div>
                <div
                  class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-50"
                >
                  <div
                    class="flex size-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      class="size-6"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="m18.375 12.739-7.693 7.693a4.5 4.5 0 0 1-6.364-6.364l10.94-10.94A3 3 0 1 1 19.5 7.372L8.552 18.32m.009-.01-.01.01m5.699-9.941-7.81 7.81a1.5 1.5 0 0 0 2.112 2.13"
                      />
                    </svg>
                  </div>
                  <div class="">
                    <a href="#" class="block font-semibold text-gray-900">
                      Laporan
                      <span class="absolute inset-0"></span>
                    </a>
                  </div>
                </div>
                <!--  -->
              </div>
              <!-- <div
                class="grid grid-cols-2 divide-x divide-gray-900/5 bg-gray-50"
              ></div> -->
            </el-popover>
          </div>
          <!-- End of Pembelian -->

          <!-- Penjualan -->
          <div class="relative">
            <button
              popovertarget="desktop-menu-penjualan"
              class="flex items-center gap-x-1 text-sm/6 font-semibold text-gray-900"
            >
              Pembelian
              <svg
                viewBox="0 0 20 20"
                fill="currentColor"
                data-slot="icon"
                aria-hidden="true"
                class="size-5 flex-none text-gray-400"
              >
                <path
                  d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                  clip-rule="evenodd"
                  fill-rule="evenodd"
                />
              </svg>
            </button>

            <el-popover
              id="desktop-menu-penjualan"
              anchor="bottom"
              popover
              class="w-screen max-w-xs overflow-hidden rounded-3xl bg-white shadow-lg outline-1 outline-gray-900/5 transition transition-discrete [--anchor-gap:--spacing(3)] backdrop:bg-transparent open:block data-closed:translate-y-1 data-closed:opacity-0 data-enter:duration-200 data-enter:ease-out data-leave:duration-150 data-leave:ease-in"
            >
              <div class="p-4">
                <div
                  class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-50"
                >
                  <div
                    class="flex size-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white"
                  >
                    <svg
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="1.5"
                      data-slot="icon"
                      aria-hidden="true"
                      class="size-6 text-gray-600 group-hover:text-indigo-600"
                    >
                      <path
                        d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 0 0 2.25-2.25V6a2.25 2.25 0 0 0-2.25-2.25H6A2.25 2.25 0 0 0 3.75 6v2.25A2.25 2.25 0 0 0 6 10.5Zm0 9.75h2.25A2.25 2.25 0 0 0 10.5 18v-2.25a2.25 2.25 0 0 0-2.25-2.25H6a2.25 2.25 0 0 0-2.25 2.25V18A2.25 2.25 0 0 0 6 20.25Zm9.75-9.75H18a2.25 2.25 0 0 0 2.25-2.25V6A2.25 2.25 0 0 0 18 3.75h-2.25A2.25 2.25 0 0 0 13.5 6v2.25a2.25 2.25 0 0 0 2.25 2.25Z"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                    </svg>
                  </div>
                  <div class="">
                    <a href="#" class="block font-semibold text-gray-900">
                      Tambah Data
                      <span class="absolute inset-0"></span>
                    </a>
                  </div>
                </div>
                <div
                  class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-50"
                >
                  <div
                    class="flex size-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white"
                  >
                    <svg
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="1.5"
                      data-slot="icon"
                      aria-hidden="true"
                      class="size-6 text-gray-600 group-hover:text-indigo-600"
                    >
                      <path
                        d="M15.042 21.672 13.684 16.6m0 0-2.51 2.225.569-9.47 5.227 7.917-3.286-.672ZM12 2.25V4.5m5.834.166-1.591 1.591M20.25 10.5H18M7.757 14.743l-1.59 1.59M6 10.5H3.75m4.007-4.243-1.59-1.59"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                    </svg>
                  </div>
                  <div class="">
                    <a href="#" class="block font-semibold text-gray-900">
                      Manajemen Data
                      <span class="absolute inset-0"></span>
                    </a>
                  </div>
                </div>
                <div
                  class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-50"
                >
                  <div
                    class="flex size-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      class="size-6"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="m18.375 12.739-7.693 7.693a4.5 4.5 0 0 1-6.364-6.364l10.94-10.94A3 3 0 1 1 19.5 7.372L8.552 18.32m.009-.01-.01.01m5.699-9.941-7.81 7.81a1.5 1.5 0 0 0 2.112 2.13"
                      />
                    </svg>
                  </div>
                  <div class="">
                    <a href="#" class="block font-semibold text-gray-900">
                      Laporan
                      <span class="absolute inset-0"></span>
                    </a>
                  </div>
                </div>
                <!--  -->
              </div>
              <!-- <div
                class="grid grid-cols-2 divide-x divide-gray-900/5 bg-gray-50"
              ></div> -->
            </el-popover>
          </div>
          <!-- End of Penjualan -->

          <a href="#" class="text-sm/6 font-semibold text-gray-900">Setting</a>
        </el-popover-group>

        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
          <a href="#" class="text-sm/6 font-semibold text-gray-900"
            >Log in <span aria-hidden="true">&rarr;</span></a
          >
        </div>
      </nav>
      <el-dialog>
        <dialog id="mobile-menu" class="backdrop:bg-transparent lg:hidden">
          <div tabindex="0" class="fixed inset-0 focus:outline-none">
            <el-dialog-panel
              class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white p-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10"
            >
              <div class="flex items-center justify-between">
                <a href="#" class="-m-1.5 p-1.5">
                  <span class="sr-only">Your Company</span>
                  <img
                    src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600"
                    alt=""
                    class="h-8 w-auto"
                  />
                </a>
                <button
                  type="button"
                  command="close"
                  commandfor="mobile-menu"
                  class="-m-2.5 rounded-md p-2.5 text-gray-700"
                >
                  <span class="sr-only">Close menu</span>
                  <svg
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.5"
                    data-slot="icon"
                    aria-hidden="true"
                    class="size-6"
                  >
                    <path
                      d="M6 18 18 6M6 6l12 12"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                  </svg>
                </button>
              </div>
              <div class="mt-6 flow-root">
                <div class="-my-6 divide-y divide-gray-500/10">
                  <div class="space-y-2 py-6">
                    <div class="-mx-3">
                      <button
                        type="button"
                        command="--toggle"
                        commandfor="products"
                        class="flex w-full items-center justify-between rounded-lg py-2 pr-3.5 pl-3 text-base/7 font-semibold text-gray-900 hover:bg-gray-50"
                      >
                        Product
                        <svg
                          viewBox="0 0 20 20"
                          fill="currentColor"
                          data-slot="icon"
                          aria-hidden="true"
                          class="size-5 flex-none in-aria-expanded:rotate-180"
                        >
                          <path
                            d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                            clip-rule="evenodd"
                            fill-rule="evenodd"
                          />
                        </svg>
                      </button>
                      <el-disclosure
                        id="products"
                        hidden
                        class="mt-2 block space-y-2"
                      >
                        <a
                          href="#"
                          class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50"
                          >Analytics</a
                        >
                        <a
                          href="#"
                          class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50"
                          >Engagement</a
                        >
                        <a
                          href="#"
                          class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50"
                          >Security</a
                        >
                        <a
                          href="#"
                          class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50"
                          >Integrations</a
                        >
                        <a
                          href="#"
                          class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50"
                          >Automations</a
                        >
                        <a
                          href="#"
                          class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50"
                          >Watch demo</a
                        >
                        <a
                          href="#"
                          class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50"
                          >Contact sales</a
                        >
                      </el-disclosure>
                    </div>
                    <a
                      href="#"
                      class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50"
                      >Features</a
                    >
                    <a
                      href="#"
                      class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50"
                      >Marketplace</a
                    >
                    <a
                      href="#"
                      class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50"
                      >Company</a
                    >
                  </div>
                  <div class="py-6">
                    <a
                      href="#"
                      class="-mx-3 block rounded-lg px-3 py-2.5 text-base/7 font-semibold text-gray-900 hover:bg-gray-50"
                      >Log in</a
                    >
                  </div>
                </div>
              </div>
            </el-dialog-panel>
          </div>
        </dialog>
      </el-dialog>
    </header>

    <main>
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <!-- form -->
        <form>
          <!-- <div class="space-y-12"> -->
          <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-base/7 font-semibold text-gray-900">
              Data Produk Baru
            </h2>
            <p class="mt-1 text-sm/6 text-gray-600">
              Use a permanent address where you can receive mail.
            </p>
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 md:grid-cols-6">
              <div class="">
                <label
                  for="kode"
                  class="block text-sm/6 font-medium text-gray-900"
                  >Kode Barang</label
                >
                <div class="mt-2">
                  <input
                    id="kode"
                    type="text"
                    name="kode"
                    autocomplete=""
                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                  />
                </div>
              </div>

              <div class="md:col-span-2">
                <label
                  for="barang"
                  class="block text-sm/6 font-medium text-gray-900"
                  >Nama Produk</label
                >
                <div class="mt-2">
                  <input
                    id="barang"
                    type="text"
                    name="barang"
                    autocomplete=""
                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                  />
                </div>
              </div>
              <div class="">
                <label
                  for="satuan"
                  class="block text-sm/6 font-medium text-gray-900"
                  >Satuan</label
                >
                <div class="mt-2 grid grid-cols-1">
                  <select
                    id="satuan"
                    name="satuan"
                    autocomplete=""
                    class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pr-8 pl-3 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                  >
                    <option>PCS</option>
                    <option>PACK</option>
                    <option>DUS</option>
                  </select>
                  <svg
                    viewBox="0 0 16 16"
                    fill="currentColor"
                    data-slot="icon"
                    aria-hidden="true"
                    class="pointer-events-none col-start-1 row-start-1 mr-2 size-5 self-center justify-self-end text-gray-500 sm:size-4"
                  >
                    <path
                      d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z"
                      clip-rule="evenodd"
                      fill-rule="evenodd"
                    />
                  </svg>
                </div>
              </div>
              <div class="">
                <label
                  for="kategori"
                  class="block text-sm/6 font-medium text-gray-900"
                  >Kategori</label
                >
                <div class="mt-2">
                  <input
                    id="barang"
                    type="text"
                    name="barang"
                    autocomplete=""
                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                  />
                </div>
                <div class="mt-2 grid grid-cols-1">
                  <select
                    id="kategori"
                    name="kategori-option"
                    autocomplete=""
                    class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pr-8 pl-3 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                  >
                    <option>PILIH JIKA ADA</option>
                    <option>COKLAT</option>
                    <option>SNACK</option>
                    <option>BERAS</option>
                  </select>
                  <svg
                    viewBox="0 0 16 16"
                    fill="currentColor"
                    data-slot="icon"
                    aria-hidden="true"
                    class="pointer-events-none col-start-1 row-start-1 mr-2 size-5 self-center justify-self-end text-gray-500 sm:size-4"
                  >
                    <path
                      d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z"
                      clip-rule="evenodd"
                      fill-rule="evenodd"
                    />
                  </svg>
                </div>
              </div>
              <div class="">
                <label
                  for="harga-beli"
                  class="block text-sm/6 font-medium text-gray-900"
                  >Harga Beli</label
                >
                <div class="mt-2">
                  <input
                    id="harga-beli"
                    type="number"
                    name="harga-beli"
                    autocomplete=""
                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                  />
                </div>
              </div>
              <div class="">
                <label
                  for="harga-jual"
                  class="block text-sm/6 font-medium text-gray-900"
                  >Harga Jual</label
                >
                <div class="mt-2">
                  <input
                    id="harga-jual"
                    type="number"
                    name="harga-jual"
                    autocomplete=""
                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                  />
                </div>
              </div>
            </div>
          </div>
          <!-- </div> -->
        </form>
        <!-- end of form -->
      </div>
    </main>
  </body>
</html>

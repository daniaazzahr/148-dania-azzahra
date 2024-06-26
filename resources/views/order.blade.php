<!-- panggil x-layout, buat dipake -->

<x-layout>
    <!-- bikin x-slot title buat bikin variable title -->
    <x-slot:title> {{ $title }} </x-slot:title>

    <!-- konten -->
    
    <!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
<form>
    <div class="space-y-12">

        <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-base font-semibold leading-7 text-gray-900">
                Personal Information
            </h2>
            <p class="mt-1 text-sm leading-6 text-gray-600">
                Making your shoes brand new again!
            </p>

            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-3">
                    <label
                        for="first-name"
                        class="block text-sm font-medium leading-6 text-gray-900"
                        >Full name</label>
                    <div class="mt-2">
                        <input
                            type="text"
                            name="first-name"
                            id="first-name"
                            autocomplete="given-name"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                        />
                    </div>
                </div>

                <div class="sm:col-span-3">
                    <label
                        for="last-name"
                        class="block text-sm font-medium leading-6 text-gray-900"
                        >Phone Number
                    </label>
                    <div class="mt-2">
                        <input
                            type="text"
                            name="last-name"
                            id="last-name"
                            autocomplete="family-name"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                        />
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <label
                        for="email"
                        class="block text-sm font-medium leading-6 text-gray-900"
                        >Email 
                    </label>
                    <div class="mt-2">
                        <input
                            id="email"
                            name="email"
                            type="email"
                            autocomplete="email"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                        />
                    </div>
                </div>

                <div class="sm:col-span-3">
                    <label
                        for="country"
                        class="block text-sm font-medium leading-6 text-gray-900"
                        >Service
                    </label>
                    <div class="mt-2">
                        <select
                            id="country"
                            name="country"
                            autocomplete="country-name"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                            <option>Pickup</option>
                            <option>Self-Pick up</option>
                        </select>
                    </div>
                </div>

                <div class="col-span-full">
                    <label
                        for="street-address"
                        class="block text-sm font-medium leading-6 text-gray-900"
                        >Address</label
                    >
                    <div class="mt-2">
                        <input
                            type="text"
                            name="street-address"
                            id="street-address"
                            autocomplete="street-address"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                        />
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="mt-6 flex items-center justify-end gap-x-6">
        <button
            type="submit"
            class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
        >
            Order
        </button>
    </div>
</form>

</x-layout>

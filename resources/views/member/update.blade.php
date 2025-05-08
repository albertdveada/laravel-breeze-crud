<x-app-layout>
    {{-- {{ dd($member) }} --}}
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 px-7">
        <div class="mt-10 text-white flex items-center justify-between">
            <h2 class="font-semibold text-xl mt-1">Update Members</h2>
            @include('member.partials.delete-member')
        </div>
        <div class="mt-5" x-data="{ imageUrl: '{{ url('storage/' . $member->profil_photos) }}' }">
            <form action="{{ route('member.updating', $member) }}" method="POST" class="flex flex-col md:flex-row gap-6" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="md:w-1/2 flex justify-center items-center">
                    <img :src="imageUrl" alt="Profil" class="rounded-md w-64 h-64 object-cover shadow-md" />
                </div>
                <div class="md:w-1/2">
                    <div class="mt-4">
                        <x-input-label for="profil_photos" :value="__('Upload Profil')" class="text-gray-300 mt-5" />
                        <input id="profil_photos" name="profil_photos" type="file" class="block w-full mt-1 px-4 py-2 bg-gray-800 text-gray-100 border border-gray-600 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-blue-500 transition-all" value="{{ old('name', $member->profil_photos) }}" accept="image/*" @change="imageUrl = URL.createObjectURL($event.target.files[0])" />
                        <x-input-error :messages="$errors->get('profil_photos')" class="mt-2 text-red-400" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="name" :value="__('Full Name')" class="text-gray-300 mt-5" />
                        <input id="name" name="name" type="text" class="block w-full mt-1 px-4 py-2 bg-gray-800 text-gray-100 border border-gray-600 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-blue-500 transition-all" value="{{ old('name', $member->name) }}" required autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2 text-red-400" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="phone" :value="__('Phone')" class="text-gray-300" />
                        <input id="phone" name="phone" type="tel" class="block w-full mt-1 px-4 py-2 bg-gray-800 text-gray-100 border border-gray-600 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-blue-500 transition-all" value="{{ old('phone', $member->phone) }}" required autocomplete="tel" minlength="9" />
                        <x-input-error :messages="$errors->get('phone')" class="mt-2 text-red-400" />
                    </div>

                    <button type="submit"
                        class="w-full mt-8 flex items-center justify-center px-6 py-3 bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 hover:from-purple-600 hover:via-pink-600 hover:to-red-600 text-white font-bold rounded-xl shadow-lg hover:shadow-pink-500/50 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-105">
                        {{ __('SUBMIT') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>

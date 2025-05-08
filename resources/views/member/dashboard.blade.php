<x-app-layout>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 px-7">

        @if (session()->has('success'))
             <x-successfully-alerts message="{{ session('success') }}" ></x-successfully-alerts>
        @endif

        <div class="mt-5 text-white flex items-center justify-between">
            <h2 class="font-semibold text-xl mt-1">Daftar Member</h2>
            <a href="{{ route('member.create') }}">
                <button class="px-10 py-2 rounded-md mt-2 font-semibold dark:bg-gray-700 shadow">Add Members</button>
            </a>
        </div>
        <div class="grid md:grid-cols-5 grid-cols-3 mt-10 text-white gap-5">
            @foreach ($members as $member)
                <div class="mt-3">
                    <img src="{{ url('storage/'.$member->profil_photos) }}" alt="">
                    <p class="text-md font-semibold">{{ $member->name }} </p>
                    <p class="text-md font-light">{{$member->id_members }}</p>
                    <a href="{{ route('member.update', $member) }}">
                        <button class="bg-blue-900 px-10 py-2 w-full rounded-md mt-5 font-semibold">Edit</button>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="mt-5">
            {{ $members->links() }}
        </div>
    </div>
</x-app-layout>

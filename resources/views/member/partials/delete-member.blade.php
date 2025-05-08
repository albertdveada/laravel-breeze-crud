<section class="space-y-6">


    <x-danger-button type="submit"
        class="w-full mt-8 flex items-center justify-center px-6 py-3 bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 hover:from-purple-600 hover:via-pink-600 hover:to-red-600 text-white font-bold rounded-xl shadow-lg hover:shadow-pink-500/50 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-105" x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-member-deletion')">
        {{ __('DELET MEMBER') }}
    </x-danger-button>

    <x-modal name="confirm-member-deletion" focusable>
        <form action="{{ route('member.destroy', $member) }}" method="POST" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                {{ __('Are you sure you want to delete your member?') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                {{ __('Once your member is deleted, all of its resources and data will be permanently deleted.') }}
            </p>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-danger-button class="ms-3">
                    {{ __('Delete Member') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>

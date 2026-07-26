<x-layouts::app :title="__('Edit Siswa')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl max-w-xl">
        <flux:heading size="xl">Edit Siswa</flux:heading>

        <form action="{{ route('siswa.update', $siswa) }}" method="POST" class="flex flex-col gap-4">
            @csrf
            @method('PUT')
            @include('siswa._form')

            <div class="flex justify-end gap-2">
                <flux:button :href="route('siswa.index')" wire:navigate variant="ghost">Batal</flux:button>
                <flux:button type="submit" variant="primary">Update</flux:button>
            </div>
        </form>
    </div>
</x-layouts::app>
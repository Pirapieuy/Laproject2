<x-layouts::app :title="__('Tambah Siswa')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl max-w-xl">
        <flux:heading size="xl">Tambah Siswa</flux:heading>

        <form action="{{ route('siswa.store') }}" method="POST" class="flex flex-col gap-4">
            @csrf
            @include('siswa._form')

            <div class="flex justify-end gap-2">
                <flux:button :href="route('siswa.index')" wire:navigate variant="ghost">Batal</flux:button>
                <flux:button type="submit" variant="primary">Simpan</flux:button>
            </div>
        </form>
    </div>
</x-layouts::app>
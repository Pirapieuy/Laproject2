<x-layouts::app :title="__('Detail Siswa')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl max-w-xl">
        <flux:heading size="xl">Detail Siswa</flux:heading>

        <div class="flex flex-col gap-2">
            <flux:text><span class="font-semibold">Nama:</span> {{ $siswa->nama }}</flux:text>
            <flux:text><span class="font-semibold">NISN:</span> {{ $siswa->nisn }}</flux:text>
            <flux:text><span class="font-semibold">Kelas:</span> {{ $siswa->kelas }}</flux:text>
            <flux:text><span class="font-semibold">Alamat:</span> {{ $siswa->alamat }}</flux:text>
        </div>

        <div>
            <flux:button :href="route('siswa.index')" wire:navigate variant="ghost">Kembali</flux:button>
        </div>
    </div>
</x-layouts::app>
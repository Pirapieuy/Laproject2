<x-layouts::app :title="__('Data Siswa')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">

        @if (session('success'))
            <flux:callout variant="success" icon="check-circle" heading="{{ session('success') }}" />
        @endif

        <div class="flex items-center justify-between">
            <flux:heading size="xl">Data Siswa</flux:heading>
            <flux:button :href="route('siswa.create')" wire:navigate variant="primary" icon="plus">
                Tambah Siswa
            </flux:button>
        </div>

        <flux:table>
            <flux:table.columns>
                <flux:table.column>Nama</flux:table.column>
                <flux:table.column>NISN</flux:table.column>
                <flux:table.column>Kelas</flux:table.column>
                <flux:table.column>Alamat</flux:table.column>
                <flux:table.column>Aksi</flux:table.column>
            </flux:table.columns>

            <flux:table.rows>
                @forelse ($siswas as $siswa)
                    <flux:table.row>
                        <flux:table.cell>{{ $siswa->nama }}</flux:table.cell>
                        <flux:table.cell>{{ $siswa->nisn }}</flux:table.cell>
                        <flux:table.cell>{{ $siswa->kelas }}</flux:table.cell>
                        <flux:table.cell>{{ Str::limit($siswa->alamat, 30) }}</flux:table.cell>
                        <flux:table.cell>
                            <div class="flex gap-2">
                                <flux:button :href="route('siswa.show', $siswa)" wire:navigate size="sm" variant="ghost">Detail</flux:button>
                                <flux:button :href="route('siswa.edit', $siswa)" wire:navigate size="sm" variant="ghost">Edit</flux:button>
                                <form action="{{ route('siswa.destroy', $siswa) }}" method="POST"
                                      onsubmit="return confirm('Yakin hapus data ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <flux:button type="submit" size="sm" variant="danger">Hapus</flux:button>
                                </form>
                            </div>
                        </flux:table.cell>
                    </flux:table.row>
                @empty
                    <flux:table.row>
                        <flux:table.cell colspan="5" class="text-center text-zinc-500">
                            Belum ada data siswa.
                        </flux:table.cell>
                    </flux:table.row>
                @endforelse
            </flux:table.rows>
        </flux:table>

        <div>
            {{ $siswas->links() }}
        </div>
    </div>
</x-layouts::app>
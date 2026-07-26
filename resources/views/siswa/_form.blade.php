<flux:input name="nama" label="Nama" value="{{ old('nama', $siswa->nama ?? '') }}" />

<flux:input name="nisn" label="NISN" value="{{ old('nisn', $siswa->nisn ?? '') }}" />

<flux:input name="kelas" label="Kelas" value="{{ old('kelas', $siswa->kelas ?? '') }}" />

<flux:textarea name="alamat" label="Alamat" rows="3">{{ old('alamat', $siswa->alamat ?? '') }}</flux:textarea>
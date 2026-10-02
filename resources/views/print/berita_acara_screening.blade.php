<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita Acara Screening Karyawan Outsourcing - {{ $screening->nama_karyawan }}</title>
    <style>
        @page {
            size: A4 portrait;
            margin: 15mm 20mm 15mm 20mm;
        }
        body {
            font-family: 'Times New Roman', Times, serif;
            font-size: 11pt;
            line-height: 1.4;
            color: #000;
            background: #fff;
            margin: 0;
            padding: 20px;
        }
        .header-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            border: 1.5px solid #000;
        }
        .header-table td {
            border: 1px solid #000;
            padding: 8px;
            vertical-align: middle;
        }
        .header-logo {
            width: 18%;
            text-align: center;
        }
        .header-logo img {
            max-width: 65px;
            height: auto;
        }
        .header-title {
            width: 52%;
            text-align: center;
            font-size: 13pt;
            font-weight: bold;
            text-transform: uppercase;
        }
        .header-meta {
            width: 30%;
            font-size: 8.5pt;
            line-height: 1.3;
        }
        .header-meta table {
            width: 100%;
            border-collapse: collapse;
        }
        .header-meta td {
            border: none;
            padding: 2px 4px;
        }
        .section-title {
            font-size: 11pt;
            font-weight: bold;
            margin-top: 15px;
            margin-bottom: 6px;
            text-decoration: underline;
        }
        .info-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 18px;
        }
        .info-table td {
            padding: 4px 6px;
            font-size: 10.5pt;
            vertical-align: top;
        }
        .info-table .label {
            width: 28%;
            font-weight: 500;
        }
        .info-table .colon {
            width: 3%;
            text-align: center;
        }
        .info-table .value {
            width: 69%;
            font-weight: bold;
        }
        .data-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
            margin-bottom: 20px;
        }
        .data-table th, .data-table td {
            border: 1px solid #000;
            padding: 6px 8px;
            font-size: 10pt;
        }
        .data-table th {
            background-color: #f2f2f2;
            text-align: center;
            font-weight: bold;
        }
        .text-center {
            text-align: center;
        }
        .box-conclusion {
            border: 1px solid #000;
            padding: 10px 14px;
            margin-top: 15px;
            margin-bottom: 15px;
            background: #fafafa;
        }
        .checkbox-item {
            margin: 6px 0;
            font-size: 10.5pt;
            display: flex;
            align-items: center;
        }
        .square-box {
            display: inline-block;
            width: 14px;
            height: 14px;
            border: 1.5px solid #000;
            margin-right: 8px;
            text-align: center;
            line-height: 13px;
            font-weight: bold;
            font-size: 11pt;
        }
        .notes-box {
            border: 1px solid #000;
            min-height: 50px;
            padding: 8px 12px;
            font-size: 10pt;
            margin-top: 4px;
            margin-bottom: 20px;
            background: #fff;
        }
        .signature-section {
            width: 100%;
            margin-top: 30px;
        }
        .signature-table {
            width: 100%;
            border-collapse: collapse;
        }
        .signature-table td {
            vertical-align: top;
            padding: 0;
        }
        .signature-right {
            width: 45%;
            float: right;
            text-align: center;
            font-size: 10.5pt;
        }
        .signature-space {
            height: 70px;
        }
        .print-actions {
            position: fixed;
            top: 20px;
            right: 20px;
            background: #047857;
            color: #fff;
            padding: 10px 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.15);
            cursor: pointer;
            font-family: sans-serif;
            font-weight: bold;
            font-size: 14px;
            border: none;
            z-index: 9999;
        }
        @media print {
            .print-actions {
                display: none;
            }
            body {
                padding: 0;
            }
        }
    </style>
</head>
<body>
    <button class="print-actions" onclick="window.print()">🖨️ Cetak Dokumen</button>

    <!-- HEADER RESMI FR-012/KOM.03.05/SANDIKAMI -->
    <table class="header-table">
        <tr>
            <td class="header-logo">
                <img src="/logo-jabar.png" alt="Logo Jawa Barat" onerror="this.src='/logo-diskominfo-jabar.png'; this.onerror=null;">
            </td>
            <td class="header-title">
                BERITA ACARA<br>
                SCREENING KARYAWAN OUTSOURCING
            </td>
            <td class="header-meta">
                <table>
                    <tr>
                        <td style="width: 45%;">No. Dokumen</td>
                        <td style="width: 5%;">:</td>
                        <td style="width: 50%;"><strong>FR-012/KOM.03.05/SANDIKAMI/</strong></td>
                    </tr>
                    <tr>
                        <td>No. Revisi</td>
                        <td>:</td>
                        <td><strong>1.1</strong></td>
                    </tr>
                    <tr>
                        <td>Tanggal Berlaku</td>
                        <td>:</td>
                        <td><strong>20 Januari 2022</strong></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

    <!-- DATA KARYAWAN -->
    <div class="section-title">DATA KARYAWAN OUTSOURCING</div>
    <table class="info-table">
        <tr>
            <td class="label">Periode Tahun</td>
            <td class="colon">:</td>
            <td class="value">{{ $screening->tahun }}</td>
        </tr>
        <tr>
            <td class="label">Nama Karyawan</td>
            <td class="colon">:</td>
            <td class="value">{{ $screening->nama_karyawan }}</td>
        </tr>
        <tr>
            <td class="label">Jabatan</td>
            <td class="colon">:</td>
            <td class="value">{{ $screening->jabatan->nama_jabatan ?? '-' }}</td>
        </tr>
        <tr>
            <td class="label">Penempatan di Bidang</td>
            <td class="colon">:</td>
            <td class="value">{{ $screening->bidang->nama_bidang ?? '-' }}</td>
        </tr>
        <tr>
            <td class="label">Tanggal Screening</td>
            <td class="colon">:</td>
            <td class="value">
                @php
                    $bulanIndo = ['', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
                    $tgl = \Carbon\Carbon::parse($screening->tanggal_screening);
                    $formatTgl = $tgl->format('d') . ' ' . $bulanIndo[(int)$tgl->format('m')] . ' ' . $tgl->format('Y');
                @endphp
                {{ $formatTgl }}
            </td>
        </tr>
    </table>

    <!-- HASIL PEMERIKSAAN CHECKLIST -->
    <div class="section-title">HASIL PEMERIKSAAN DOKUMEN SCREENING</div>
    <table class="data-table">
        <thead>
            <tr>
                <th style="width: 6%;">No</th>
                <th style="width: 44%;">Item Pemeriksaan</th>
                <th style="width: 10%;">Ada</th>
                <th style="width: 10%;">Tidak</th>
                <th style="width: 30%;">Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @forelse($screening->details as $idx => $detail)
            <tr>
                <td class="text-center">{{ $idx + 1 }}</td>
                <td>{{ $detail->item->nama_item ?? "Item ".($idx+1) }}</td>
                <td class="text-center font-bold">
                    {{ $detail->status === 'Ada' ? '✓' : '-' }}
                </td>
                <td class="text-center font-bold">
                    {{ $detail->status === 'Tidak' ? '✓' : '-' }}
                </td>
                <td>{{ $detail->keterangan ?? '-' }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center">Belum ada rincian item screening.</td>
            </tr>
            @endforelse
        </tbody>
    </table>

    <!-- KESIMPULAN AKHIR -->
    <div class="section-title">KESIMPULAN AKHIR PEMERIKSAAN</div>
    <div class="box-conclusion">
        <div class="checkbox-item">
            <span class="square-box">{{ $screening->kesimpulan === 'Perlu melengkapi administrasi' ? '✓' : '' }}</span>
            <span>Perlu melengkapi administrasi</span>
        </div>
        <div class="checkbox-item">
            <span class="square-box">{{ $screening->kesimpulan === 'Administrasi Lengkap' ? '✓' : '' }}</span>
            <strong>Administrasi Lengkap</strong>
        </div>
    </div>

    <!-- CATATAN TAMBAHAN -->
    <div class="section-title">CATATAN</div>
    <div class="notes-box">
        {{ $screening->catatan ?: 'Tidak ada catatan khusus. Seluruh dokumen telah diverifikasi sesuai ketentuan yang berlaku.' }}
    </div>

    <!-- TANDA TANGAN -->
    <div class="signature-section">
        <div class="signature-right">
            <div>Bandung, {{ $formatTgl }}</div>
            <div style="font-weight: bold; margin-top: 4px;">Petugas Verifikator Screening</div>
            <div class="signature-space"></div>
            <div style="font-weight: bold; text-decoration: underline;">Admin SMKI</div>
            <div style="font-size: 9.5pt;">Pemerintah Provinsi Jawa Barat</div>
        </div>
        <div style="clear: both;"></div>
    </div>
</body>
</html>

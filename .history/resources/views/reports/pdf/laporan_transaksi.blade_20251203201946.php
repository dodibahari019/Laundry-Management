<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Transaksi</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Arial', sans-serif;
            font-size: 10px;
            color: #333;
            line-height: 1.4;
        }
        
        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
        }
        
        .header h1 {
            font-size: 24px;
            margin-bottom: 5px;
        }
        
        .header p {
            font-size: 11px;
            opacity: 0.95;
        }
        
        .info-box {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 6px;
            margin-bottom: 20px;
            border-left: 4px solid #667eea;
        }
        
        .info-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 8px;
        }
        
        .info-label {
            font-weight: bold;
            color: #555;
        }
        
        .info-value {
            color: #333;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            font-size: 9px;
        }
        
        table thead {
            background: #667eea;
            color: white;
        }
        
        table thead th {
            padding: 10px 6px;
            text-align: left;
            font-weight: bold;
            font-size: 9px;
        }
        
        table tbody td {
            padding: 8px 6px;
            border-bottom: 1px solid #e5e7eb;
        }
        
        table tbody tr:hover {
            background: #f9fafb;
        }
        
        .badge {
            display: inline-block;
            padding: 3px 8px;
            border-radius: 12px;
            font-size: 8px;
            font-weight: bold;
            text-align: center;
        }
        
        .badge-kiloan {
            background: #dbeafe;
            color: #1e40af;
        }
        
        .badge-satuan {
            background: #e9d5ff;
            color: #6b21a8;
        }
        
        .badge-menunggu {
            background: #fef3c7;
            color: #92400e;
        }
        
        .badge-diproses {
            background: #dbeafe;
            color: #1e40af;
        }
        
        .badge-dicuci {
            background: #fed7aa;
            color: #c2410c;
        }
        
        .badge-disetrika {
            background: #e9d5ff;
            color: #6b21a8;
        }
        
        .badge-ready {
            background: #d1fae5;
            color: #065f46;
        }
        
        .badge-diambil {
            background: #e5e7eb;
            color: #374151;
        }
        
        .badge-cash {
            background: #fef3c7;
            color: #92400e;
        }
        
        .badge-qris {
            background: #e9d5ff;
            color: #6b21a8;
        }
        
        .badge-transfer {
            background: #dbeafe;
            color: #1e40af;
        }
        
        .text-right {
            text-align: right;
        }
        
        .text-center {
            text-align: center;
        }
        
        .font-bold {
            font-weight: bold;
        }
        
        .summary {
            background: #f0fdf4;
            border: 2px solid #86efac;
            padding: 15px;
            border-radius: 6px;
            margin-top: 20px;
        }
        
        .summary-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 8px;
            font-size: 11px;
        }
        
        .summary-row.total {
            border-top: 2px solid #22c55e;
            padding-top: 8px;
            margin-top: 8px;
            font-size: 13px;
            font-weight: bold;
        }
        
        .footer {
            margin-top: 30px;
            padding-top: 15px;
            border-top: 2px solid #e5e7eb;
            text-align: center;
            font-size: 9px;
            color: #6b7280;
        }
        
        .page-break {
            page-break-after: always;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>📊 LAPORAN TRANSAKSI</h1>
        <p>Laundry Management System</p>
    </div>
    
    <div class="info-box">
        <div class="info-row">
            <span class="info-label">Periode:</span>
            <span class="info-value">
                {{ \Carbon\Carbon::parse($startDate)->format('d M Y') }} - 
                {{ \Carbon\Carbon::parse($endat)->format('d M Y') }}
            </span>
        </div>
        <div class="info-row">
            <span class="info-label">Tanggal Cetak:</span>
            <span class="info-value">{{ \Carbon\Carbon::now()->format('d M Y H:i') }}</span>
        </div>
        <div class="info-row">
            <span class="info-label">Total Transaksi:</span>
            <span class="info-value">{{ count($data) }} transaksi</span>
        </div>
    </div>
    
    <table>
        <thead>
            <tr>
                <th style="width: 3%;">No</th>
                <th style="width: 10%;">Kode Order</th>
                <th style="width: 12%;">Pelanggan</th>
                <th style="width: 12%;">Layanan</th>
                <th style="width: 8%;" class="text-center">Berat/Qty</th>
                <th style="width: 10%;" class="text-right">Total</th>
                <th style="width: 8%;" class="text-center">Status</th>
                <th style="width: 10%;">Tgl Masuk</th>
                <th style="width: 9%;" class="text-center">Metode</th>
                <th style="width: 9%;" class="text-right">Dibayar</th>
                <th style="width: 9%;" class="text-right">Kembali</th>
            </tr>
        </thead>
        <tbody>
            @php
                $totalPendatapatan = 0;
                $totalDibayar = 0;
                $totalKembalian = 0;
            @endphp
            
            @foreach($data as $index => $x)
                @php
                    $jenisClass = $x->jenis == 'kiloan' ? 'badge-kiloan' : 'badge-satuan';
                    $beratQty = $x->jenis == 'kiloan' ? $x->berat : $x->jumlah;
                    $satuan = $x->jenis == 'kiloan' ? 'Kg' : 'Pcs';
                    
                    $statusClass = 'badge-menunggu';
                    if($x->status_order == 'diproses') $statusClass = 'badge-diproses';
                    elseif($x->status_order == 'dicuci') $statusClass = 'badge-dicuci';
                    elseif($x->status_order == 'disetrika') $statusClass = 'badge-disetrika';
                    elseif($x->status_order == 'ready') $statusClass = 'badge-ready';
                    elseif($x->status_order == 'diambil') $statusClass = 'badge-diambil';
                    
                    $metodeClass = 'badge-cash';
                    if($x->metode == 'qris') $metodeClass = 'badge-qris';
                    elseif($x->metode == 'transfer') $metodeClass = 'badge-transfer';
                    
                    $totalPendapatan += $x->total;
                    $totalDibayar += $x->jumlahBayar;
                    $totalKembalian += $x->kembalian;
                @endphp
                
                <tr>
                    <td class="text-center">{{ $index + 1 }}</td>
                    <td>
                        <strong style="color: #667eea;">#{{ $x->kode_order }}</strong><br>
                        <span style="font-size: 8px; color: #6b7280;">
                            {{ \Carbon\Carbon::parse($x->tanggal_masuk)->format('d/m/Y H:i') }}
                        </span>
                    </td>
                    <td>
                        <strong>{{ $x->nama }}</strong><br>
                        <span style="font-size: 8px; color: #6b7280;">{{ $x->no_hp }}</span>
                    </td>
                    <td>
                        {{ $x->nama_layanan }}<br>
                        <span class="badge {{ $jenisClass }}">{{ $x->jenis }}</span>
                    </td>
                    <td class="text-center">
                        <span class="badge {{ $jenisClass }}">
                            {{ rtrim(rtrim(number_format($beratQty, 2, ',', '.'), '0'), ',') }} {{ $satuan }}
                        </span>
                    </td>
                    <td class="text-right font-bold">
                        Rp {{ number_format($x->total, 0, ',', '.') }}
                    </td>
                    <td class="text-center">
                        <span class="badge {{ $statusClass }}">{{ $x->status_order }}</span>
                    </td>
                    <td style="font-size: 8px;">
                        {{ \Carbon\Carbon::parse($x->tanggal_masuk)->format('d M Y') }}
                    </td>
                    <td class="text-center">
                        <span class="badge {{ $metodeClass }}">{{ $x->metode }}</span>
                    </td>
                    <td class="text-right">
                        Rp {{ number_format($x->jumlahBayar, 0, ',', '.') }}
                    </td>
                    <td class="text-right">
                        Rp {{ number_format($x->kembalian, 0, ',', '.') }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
    <div class="summary">
        <div class="summary-row">
            <span>Total Transaksi:</span>
            <span>{{ count($data) }} transaksi</span>
        </div>
        <div class="summary-row total">
            <span>TOTAL PENDAPATAN:</span>
            <span>Rp {{ number_format($totalPendapatan, 0, ',', '.') }}</span>
        </div>
        <div class="summary-row">
            <span>Total Dibayar:</span>
            <span>Rp {{ number_format($totalDibayar, 0, ',', '.') }}</span>
        </div>
        <div class="summary-row">
            <span>Total Kembalian:</span>
            <span>Rp {{ number_format($totalKembalian, 0, ',', '.') }}</span>
        </div>
    </div>
    
    <div class="footer">
        <p>Dokumen ini digenerate secara otomatis oleh sistem</p>
        <p>© {{ date('Y') }} Laundry Management System. All rights reserved.</p>
    </div>
</body>
</html>
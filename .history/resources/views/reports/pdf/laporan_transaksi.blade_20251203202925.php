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
    
   
</body>
</html>
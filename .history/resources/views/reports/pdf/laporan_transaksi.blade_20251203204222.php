<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laporan Transaksi</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 9pt;
            color: #1f2937;
            line-height: 1.4;
            background: #f9fafb;
        }
        
        .container {
            padding: 20px;
        }
        
        .header {
            background: linear-gradient(135deg, #7c3aed 0%, #a78bfa 100%);
            padding: 25px;
            margin: -20px -20px 25px -20px;
            border-radius: 0 0 15px 15px;
            color: white;
            text-align: center;
        }
        
        .header h1 {
            font-size: 28pt;
            font-weight: bold;
            margin-bottom: 8px;
            letter-spacing: 0.5px;
        }
        
        .header .subtitle {
            font-size: 11pt;
            opacity: 0.95;
            font-weight: 500;
        }
        
        .info-section {
            display: flex;
            gap: 15px;
            margin-bottom: 25px;
        }
        
        .info-card {
            flex: 1;
            background: white;
            border: 2px solid #e5e7eb;
            border-radius: 10px;
            padding: 15px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }
        
        .info-card-header {
            font-size: 8pt;
            text-transform: uppercase;
            color: #6b7280;
            font-weight: 700;
            margin-bottom: 8px;
            letter-spacing: 0.5px;
        }
        
        .info-card-value {
            font-size: 11pt;
            color: #1f2937;
            font-weight: 600;
        }
        
        .info-card.purple {
            border-left: 4px solid #7c3aed;
        }
        
        .info-card.blue {
            border-left: 4px solid #3b82f6;
        }
        
        .info-card.green {
            border-left: 4px solid #10b981;
        }
        
        table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }
        
        thead {
            background: linear-gradient(135deg, #f3f4f6 0%, #e5e7eb 100%);
        }
        
        th {
            padding: 12px 8px;
            text-align: left;
            font-weight: 700;
            font-size: 7.5pt;
            color: #374151;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            border-bottom: 2px solid #d1d5db;
        }
        
        td {
            padding: 10px 8px;
            border-bottom: 1px solid #f3f4f6;
            font-size: 8pt;
            color: #374151;
        }
        
        tbody tr:nth-child(even) {
            background: #f9fafb;
        }
        
        tbody tr:hover {
            background: #f3f4f6;
        }
        
        .text-right {
            text-align: right;
        }
        
        .text-center {
            text-align: center;
        }
        
        .font-bold {
            font-weight: 700;
            color: #111827;
        }
        
        .badge {
            display: inline-block;
            padding: 4px 10px;
            border-radius: 12px;
            font-size: 7pt;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.3px;
        }
        
        /* Status Badges */
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
            color: #9a3412;
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
        
        /* Payment Method Badges */
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
        
        /* Jenis Badges */
        .badge-kiloan {
            background: #dbeafe;
            color: #1e40af;
        }
        
        .badge-satuan {
            background: #e9d5ff;
            color: #6b21a8;
        }
        
        .code-order {
            color: #7c3aed;
            font-weight: 700;
            font-size: 8.5pt;
        }
        
        .small-text {
            font-size: 7pt;
            color: #6b7280;
            display: block;
            margin-top: 2px;
        }
        
        .customer-name {
            font-weight: 600;
            color: #111827;
        }
        
        .summary-section {
            margin-top: 25px;
            background: white;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }
        
        .summary-title {
            font-size: 11pt;
            font-weight: 700;
            color: #111827;
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 2px solid #e5e7eb;
        }
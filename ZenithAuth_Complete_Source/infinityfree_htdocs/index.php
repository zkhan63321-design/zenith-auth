<?php
// Zenith Auth - InfinityFree PHP Web Portal (zenithauth.kesug.com)
$upi_id = "zeeshan1710@fam";
$owner_name = "Zeeshan";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Zenith Auth — Next-Gen Cloud Licensing & Security Platform</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/lucide@latest"></script>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800;900&family=JetBrains+Mono:wght@400;500;600;700&display=swap');
    body { background-color: #06070a; color: #f8fafc; font-family: 'Plus Jakarta Sans', sans-serif; }
    .bg-grid-cyber {
      background-image: 
        radial-gradient(circle at 50% 0%, rgba(139, 92, 246, 0.16) 0%, transparent 60%),
        radial-gradient(circle at 85% 30%, rgba(6, 182, 212, 0.1) 0%, transparent 50%),
        linear-gradient(to right, rgba(255, 255, 255, 0.035) 1px, transparent 1px),
        linear-gradient(to bottom, rgba(255, 255, 255, 0.02) 1px, transparent 1px);
      background-size: 100% 100%, 100% 100%, 48px 48px, 48px 48px;
    }
    .card-vault { background: #0c0e17; border: 1px solid #1a1e2f; border-radius: 1.25rem; transition: all 0.2s ease; }
    .card-vault:hover { border-color: #06b6d4; transform: translateY(-2px); box-shadow: 0 0 25px rgba(6, 182, 212, 0.2); }
    .cycle-btn { padding: 6px 18px; border-radius: 9999px; font-size: 0.78rem; font-weight: 800; color: #94a3b8; background: transparent; cursor: pointer; border: none; transition: all 0.2s; }
    .cycle-btn.active { background: #06b6d4; color: #020617; }
    .upi-qr-card { background: #080a12; border: 1px solid #1a2238; border-radius: 1.25rem; padding: 1.5rem; text-align: center; }
    .upi-qr-wrapper { background: #ffffff; padding: 12px; border-radius: 16px; display: inline-block; box-shadow: 0 0 25px rgba(6, 182, 212, 0.35); border: 2px solid #06b6d4; }
  </style>
</head>
<body class="bg-grid-cyber min-h-screen text-slate-100 selection:bg-cyan-500 selection:text-black">

  <!-- TOP NAVBAR -->
  <nav class="sticky top-0 z-50 px-6 py-4 bg-[#080a10]/90 backdrop-blur-xl border-b border-white/5">
    <div class="max-w-7xl mx-auto flex items-center justify-between">
      <a href="/" class="flex items-center gap-2.5">
        <div class="w-8 h-8 rounded-lg bg-cyan-500/15 border border-cyan-500/30 text-cyan-400 flex items-center justify-center font-black">
          <i data-lucide="folder" class="w-4 h-4"></i>
        </div>
        <span class="text-xl font-black text-white">Zenith Auth</span>
      </a>

      <div class="flex items-center gap-4">
        <a href="#pricing" class="px-5 py-2 rounded-full border border-cyan-500 text-cyan-400 font-bold text-xs hover:bg-cyan-500/10 transition">
          Pricing & UPI &rarr;
        </a>
      </div>
    </div>
  </nav>

  <!-- HERO SECTION -->
  <section class="pt-24 pb-16 px-6 text-center max-w-4xl mx-auto space-y-6">
    <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-cyan-950/60 border border-cyan-500/30 text-cyan-300 text-xs font-bold uppercase tracking-wider">
      <span class="w-2 h-2 rounded-full bg-cyan-400 animate-pulse"></span>
      Official Cloud Portal &bull; zenithauth.kesug.com
    </div>

    <h1 class="text-5xl md:text-7xl font-black tracking-tight text-white leading-tight">
      Simplify Your <span class="bg-clip-text text-transparent bg-gradient-to-r from-cyan-400 via-teal-200 to-white">Authentication</span>
    </h1>

    <p class="text-base md:text-lg text-slate-400 max-w-2xl mx-auto">
      Secure your software with cloud-native subscriptions, hardware ID fingerprinting, automated Discord bots, and private Seller API endpoints.
    </p>
  </section>

  <!-- PRICING TIERS -->
  <section id="pricing" class="py-16 px-6 max-w-6xl mx-auto">
    <div class="text-center space-y-3 mb-10">
      <h2 class="text-3xl md:text-5xl font-black text-white">Choose Your Plan</h2>
      <p class="text-xs text-slate-400">Scan & Pay via UPI (<?php echo $upi_id; ?>) for instant automated activation.</p>

      <!-- Toggle -->
      <div class="pt-2 flex items-center justify-center">
        <div class="bg-[#111422] p-1 rounded-full border border-white/10 flex">
          <button id="toggle-monthly" onclick="setCycle('monthly')" class="cycle-btn active">Monthly</button>
          <button id="toggle-yearly" onclick="setCycle('yearly')" class="cycle-btn">Yearly (Save Big)</button>
        </div>
      </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <!-- Tester -->
      <div class="card-vault p-8 flex flex-col justify-between">
        <div>
          <span class="px-2.5 py-1 rounded bg-white/10 text-white text-[10px] font-black uppercase">DEFAULT TIER</span>
          <h3 class="text-2xl font-black text-white mt-3">Tester</h3>
          <div class="text-4xl font-black text-white mt-4">Free</div>
          <p class="text-xs text-slate-400 mt-2">2 Applications &bull; 15 Licenses &bull; 15 Users</p>
          <div class="mt-6 space-y-3 text-xs text-slate-300">
            <div>&check; 2 Applications</div>
            <div>&check; 15 Licenses per App</div>
            <div>&check; 15 Users per App</div>
            <div class="text-slate-500 line-through">&cross; Private Seller Key</div>
            <div class="text-slate-500 line-through">&cross; Discord Bot</div>
          </div>
        </div>
        <button class="mt-8 w-full py-2.5 rounded-xl bg-white/10 text-slate-400 text-xs font-bold">Free Plan</button>
      </div>

      <!-- Developer (₹100/mo or ₹500/yr) -->
      <div class="card-vault p-8 flex flex-col justify-between border-cyan-500/40">
        <div>
          <span class="px-2.5 py-1 rounded bg-cyan-500/10 text-cyan-400 text-[10px] font-black uppercase">DEVELOPER</span>
          <h3 class="text-2xl font-black text-white mt-3">Developer</h3>
          <div class="text-4xl font-black text-white mt-4">
            <span id="price-developer">₹100</span><span id="cycle-developer" class="text-xs text-slate-400 font-normal">/mo</span>
          </div>
          <p class="text-xs text-slate-400 mt-2">Unlimited apps & 20k users per app.</p>
          <div class="mt-6 space-y-3 text-xs text-slate-300">
            <div>&check; Unlimited Applications</div>
            <div>&check; Unlimited Licenses</div>
            <div>&check; 20,000 Users per App</div>
            <div>&check; Full Event Audit Trail</div>
          </div>
        </div>
        <button onclick="openUpi('Developer')" class="mt-8 w-full py-2.5 rounded-xl bg-cyan-600 hover:bg-cyan-500 text-white font-bold text-xs transition">
          Pay with UPI (<span id="btn-price-developer">₹100</span>)
        </button>
      </div>

      <!-- Seller (₹300/mo or ₹1000/yr) -->
      <div class="card-vault p-8 flex flex-col justify-between bg-gradient-to-b from-[#111624] to-[#0a0c14] border-cyan-500 shadow-2xl">
        <div>
          <span class="px-2.5 py-1 rounded bg-amber-500/15 text-amber-400 text-[10px] font-black uppercase">FEATURED SELLER</span>
          <h3 class="text-2xl font-black text-white mt-3">Seller</h3>
          <div class="text-4xl font-black text-white mt-4">
            <span id="price-seller">₹300</span><span id="cycle-seller" class="text-xs text-slate-400 font-normal">/mo</span>
          </div>
          <p class="text-xs text-slate-400 mt-2">Private Seller Key, Discord & Telegram bots.</p>
          <div class="mt-6 space-y-3 text-xs text-slate-300">
            <div>&check; Private Seller Key & Full API</div>
            <div>&check; Discord Bot Slash Commands</div>
            <div>&check; Telegram Bot Key Delivery</div>
            <div>&check; Unlimited Applications & Keys</div>
          </div>
        </div>
        <button onclick="openUpi('Seller')" class="mt-8 w-full py-3 rounded-xl bg-cyan-400 hover:bg-cyan-300 text-slate-950 font-black text-xs transition shadow-lg shadow-cyan-400/30">
          Activate Seller (<span id="btn-price-seller">₹300</span>)
        </button>
      </div>
    </div>
  </section>

  <!-- UPI Modal -->
  <div id="modal-upi" class="fixed inset-0 z-50 bg-black/85 backdrop-blur-md flex items-center justify-center p-4 hidden">
    <div class="bg-[#0b0e17] border border-cyan-500/40 rounded-2xl max-w-md w-full p-6 text-left shadow-2xl space-y-4">
      <div class="flex items-center justify-between">
        <h4 class="font-bold text-white text-base">UPI Instant Payment</h4>
        <button onclick="document.getElementById('modal-upi').classList.add('hidden')" class="text-slate-400 hover:text-white">&times;</button>
      </div>

      <div class="p-3.5 rounded-xl bg-[#121626] border border-white/10 flex items-center justify-between text-xs">
        <div>
          <div class="text-[10px] text-slate-400 uppercase font-bold">Selected Plan</div>
          <div id="upi-plan-title" class="font-bold text-white text-sm">Seller Plan</div>
        </div>
        <div class="text-right">
          <div class="text-[10px] text-slate-400 uppercase font-bold">Amount Due</div>
          <div id="upi-amount" class="font-black text-cyan-400 text-base">₹300</div>
        </div>
      </div>

      <div class="upi-qr-card">
        <div class="upi-qr-wrapper">
          <img id="qr-img" src="" alt="QR" class="w-48 h-48 block mx-auto">
        </div>
        <p class="text-[11px] text-slate-400 mt-2 font-semibold">Scan with GPay, PhonePe, Paytm, or BHIM</p>
      </div>

      <div class="p-2.5 rounded-xl bg-[#070910] border border-white/10 flex items-center justify-between text-xs font-mono">
        <div>
          <div class="text-[9px] uppercase text-slate-500">Official UPI ID</div>
          <div class="text-cyan-300 font-bold"><?php echo $upi_id; ?></div>
        </div>
        <button onclick="navigator.clipboard.writeText('<?php echo $upi_id; ?>'); alert('Copied: <?php echo $upi_id; ?>');" class="px-3 py-1 bg-white/10 text-white rounded text-xs">Copy</button>
      </div>

      <div class="space-y-2">
        <label class="block text-xs text-slate-300">Enter 12-digit UTR / UPI Ref ID</label>
        <input type="text" id="utr-input" placeholder="e.g. 431089234123" class="w-full bg-[#070910] border border-white/10 rounded-xl px-4 py-2 font-mono text-xs text-white">
        <button onclick="alert('Payment submitted! Transaction UTR recorded for <?php echo $owner_name; ?>.'); document.getElementById('modal-upi').classList.add('hidden');" class="w-full py-3 rounded-xl bg-cyan-400 hover:bg-cyan-300 text-slate-950 font-black text-xs transition">
          Confirm & Submit Payment
        </button>
      </div>
    </div>
  </div>

  <script>
    let cycle = 'monthly';
    const prices = {
      Developer: { monthly: 100, yearly: 500 },
      Seller: { monthly: 300, yearly: 1000 }
    };

    function setCycle(c) {
      cycle = c;
      document.getElementById('toggle-monthly').classList.toggle('active', c === 'monthly');
      document.getElementById('toggle-yearly').classList.toggle('active', c === 'yearly');

      if (c === 'yearly') {
        document.getElementById('price-developer').textContent = '₹500';
        document.getElementById('cycle-developer').textContent = '/year';
        document.getElementById('btn-price-developer').textContent = '₹500/yr';

        document.getElementById('price-seller').textContent = '₹1,000';
        document.getElementById('cycle-seller').textContent = '/year';
        document.getElementById('btn-price-seller').textContent = '₹1,000/yr';
      } else {
        document.getElementById('price-developer').textContent = '₹100';
        document.getElementById('cycle-developer').textContent = '/mo';
        document.getElementById('btn-price-developer').textContent = '₹100';

        document.getElementById('price-seller').textContent = '₹300';
        document.getElementById('cycle-seller').textContent = '/mo';
        document.getElementById('btn-price-seller').textContent = '₹300';
      }
    }

    function openUpi(plan) {
      const p = prices[plan][cycle];
      document.getElementById('upi-plan-title').textContent = `${plan} Plan (${cycle.toUpperCase()})`;
      document.getElementById('upi-amount').textContent = `₹${p}`;
      const upiUri = `upi://pay?pa=<?php echo $upi_id; ?>&pn=ZenithAuth&am=${p}&cu=INR&tn=${plan}_${cycle}`;
      document.getElementById('qr-img').src = `https://api.qrserver.com/v1/create-qr-code/?size=250x250&data=${encodeURIComponent(upiUri)}`;
      document.getElementById('modal-upi').classList.remove('hidden');
    }
    lucide.createIcons();
  </script>
</body>
</html>

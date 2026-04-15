<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>VedNova Consultancy | Elite MT5 Bots & Signals — Dubai</title>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,300&family=Rajdhani:wght@400;500;600;700&family=Space" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>

<body>
    <!-- TICKER -->
    <div class="ticker">
        <div id="quotesWidgetTicker"></div>
        <div class="qw-copyright"><a href="https://www.mql5.com/" rel="noopener nofollow" target="_blank">MQL5</a></div>
    </div>

    <!-- NAV -->
    <nav id="navbar">
        <a href="#" class="logo">
            <div class="gem">V</div>
            <div><span class="lname">VedNova</span><span class="lsub">Consultancy · Dubai</span></div>
        </a>
        <ul class="nav-links">
            <li><a href="#about">About</a></li>
            <li><a href="#bots">MT5 Bots</a></li>
            <li><a href="#backtest">Results</a></li>
            <li><a href="#signals">Signals</a></li>
            <li><a href="#invest">Invest</a></li>
            <li><a href="#contact" class="ncta">Get Started</a></li>
        </ul>
        <button class="ham" onclick="toggleNav()"><span></span><span></span><span></span></button>
    </nav>

    <!-- HERO -->
    <section class="hero" id="home">
        <div class="hbg"></div>
        <div class="hgrid"></div>
        <div class="hcont">
            <div class="hbadge">◆ Dubai's Premier Algo Trading House</div>
            <h1>Trade <em>Smarter.</em><br>Profit <em>Consistently.</em></h1>
            <p class="hsub">Institutional-grade MetaTrader 5 Expert Advisors engineered by VedNova's quant team in Dubai. Fully automated, risk-managed and rigorously backtested with real tick data.</p>
            <div class="hbtns">
                <a href="#bots" class="btn btn-g">Explore MT5 Bots</a>
                <a href="#invest" class="btn btn-o">Investment Plans</a>
            </div>
            <div class="hstats">
                <div>
                    <div class="snum"><span class="counter" data-target="94">0</span>%</div>
                    <div class="slbl">Win Rate (Best EA)</div>
                </div>
                <div>
                    <div class="snum"><span class="counter" data-target="12">0</span>+</div>
                    <div class="slbl">Active EA Bots</div>
                </div>
                <div>
                    <div class="snum"><span class="counter" data-target="2400">0</span>+</div>
                    <div class="slbl">Active Traders</div>
                </div>
                <div>
                    <div class="snum">8</div>
                    <div class="slbl">Years Backtested</div>
                </div>
            </div>
        </div>
        <div class="hvis">
            <svg viewBox="0 0 580 460" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <linearGradient id="hg1" x1="0" y1="0" x2="0" y2="1">
                        <stop offset="0%" stop-color="#C9A84C" stop-opacity="0.28" />
                        <stop offset="100%" stop-color="#C9A84C" stop-opacity="0" />
                    </linearGradient>
                    <linearGradient id="hl1" x1="0" y1="0" x2="1" y2="0">
                        <stop offset="0%" stop-color="#C9A84C" stop-opacity="0.3" />
                        <stop offset="60%" stop-color="#E8C97A" />
                        <stop offset="100%" stop-color="#C9A84C" stop-opacity="0.5" />
                    </linearGradient>
                    <filter id="gw">
                        <feGaussianBlur stdDeviation="3" result="b" />
                        <feMerge>
                            <feMergeNode in="b" />
                            <feMergeNode in="SourceGraphic" />
                        </feMerge>
                    </filter>
                </defs>
                <g stroke="rgba(201,168,76,0.05)" stroke-width="1">
                    <line x1="0" y1="100" x2="580" y2="100" />
                    <line x1="0" y1="200" x2="580" y2="200" />
                    <line x1="0" y1="300" x2="580" y2="300" />
                    <line x1="0" y1="400" x2="580" y2="400" />
                    <line x1="100" y1="0" x2="100" y2="460" />
                    <line x1="200" y1="0" x2="200" y2="460" />
                    <line x1="300" y1="0" x2="300" y2="460" />
                    <line x1="400" y1="0" x2="400" y2="460" />
                    <line x1="500" y1="0" x2="500" y2="460" />
                </g>
                <path d="M0,390 C40,380 60,360 100,330 C140,300 160,315 200,275 C240,235 260,245 300,195 C340,145 360,165 400,115 C440,65 460,85 500,55 C530,33 555,25 580,16 L580,460 L0,460 Z" fill="url(#hg1)" />
                <path d="M0,390 C40,380 60,360 100,330 C140,300 160,315 200,275 C240,235 260,245 300,195 C340,145 360,165 400,115 C440,65 460,85 500,55 C530,33 555,25 580,16" fill="none" stroke="url(#hl1)" stroke-width="2.5" filter="url(#gw)" stroke-dasharray="1200" stroke-dashoffset="1200">
                    <animate attributeName="stroke-dashoffset" values="1200;0" dur="2.5s" fill="freeze" begin="0.6s" />
                </path>
                <g fill="#C9A84C" filter="url(#gw)">
                    <circle cx="100" cy="330" r="4" opacity="0">
                        <animate attributeName="opacity" values="0;1" dur=".3s" fill="freeze" begin="1s" />
                    </circle>
                    <circle cx="200" cy="275" r="4" opacity="0">
                        <animate attributeName="opacity" values="0;1" dur=".3s" fill="freeze" begin="1.5s" />
                    </circle>
                    <circle cx="300" cy="195" r="4" opacity="0">
                        <animate attributeName="opacity" values="0;1" dur=".3s" fill="freeze" begin="2s" />
                    </circle>
                    <circle cx="400" cy="115" r="4" opacity="0">
                        <animate attributeName="opacity" values="0;1" dur=".3s" fill="freeze" begin="2.3s" />
                    </circle>
                    <circle cx="500" cy="55" r="4" opacity="0">
                        <animate attributeName="opacity" values="0;1" dur=".3s" fill="freeze" begin="2.5s" />
                    </circle>
                    <circle cx="580" cy="16" r="4" opacity="0">
                        <animate attributeName="opacity" values="0;1" dur=".3s" fill="freeze" begin="2.7s" />
                    </circle>
                </g>
                <g font-family="Space Mono" font-size="10" fill="rgba(201,168,76,0.4)">
                    <text x="8" y="96">+80%</text><text x="8" y="196">+60%</text><text x="8" y="296">+40%</text><text x="8" y="396">+20%</text>
                    <text x="70" y="455">2017</text><text x="170" y="455">2019</text><text x="270" y="455">2021</text><text x="370" y="455">2023</text><text x="470" y="455">2025</text>
                </g>
                <g opacity="0">
                    <animate attributeName="opacity" values="0;1" dur=".5s" fill="freeze" begin="3s" />
                    <rect x="460" y="26" width="110" height="34" fill="rgba(47,224,154,0.12)" stroke="rgba(47,224,154,0.3)" stroke-width="1" />
                    <text x="515" y="46" font-family="Space Mono" font-size="12" fill="#2FE09A" text-anchor="middle">+1,975%</text>
                    <text x="515" y="56" font-family="Rajdhani" font-size="9" fill="rgba(47,224,154,0.5)" text-anchor="middle" letter-spacing="1">TOTAL GAIN</text>
                </g>
            </svg>
        </div>
    </section>

    <!-- ABOUT -->
    <section class="about" id="about">
        <div class="ag">
            <div>
                <div class="slabel rev">Our Story</div>
                <h2 class="rev">Dubai-Based <em>Quantitative</em> Experts</h2>
                <p class="sdesc rev">VedNova Consultancy was founded in Dubai by institutional traders, software engineers and financial engineers dedicated to democratising algorithmic trading. Our MT5 EAs are built with the same rigour used by hedge funds.</p>
                <div class="feats">
                    <div class="feat rev">
                        <div class="fic">🤖</div>
                        <div class="ftit">100% Automated</div>
                        <div class="fdesc">EAs execute trades 24/5 without emotion or hesitation.</div>
                    </div>
                    <div class="feat rev">
                        <div class="fic">🔬</div>
                        <div class="ftit">Quant Tested</div>
                        <div class="fdesc">Every strategy validated with 98%+ quality tick data before release.</div>
                    </div>
                    <div class="feat rev">
                        <div class="fic">🛡️</div>
                        <div class="ftit">Risk Managed</div>
                        <div class="fdesc">Built-in drawdown controls, position sizing and smart stop-loss.</div>
                    </div>
                    <div class="feat rev">
                        <div class="fic">📞</div>
                        <div class="ftit">Live Support</div>
                        <div class="fdesc">Dedicated account managers in Dubai, Mon–Fri 9AM–6PM GST.</div>
                    </div>
                </div>
            </div>
            <div class="rev">
                <div class="dbox">
                    <svg style="position:absolute;bottom:0;left:0;right:0;width:100%;height:60%" viewBox="0 0 800 300">
                        <defs>
                            <linearGradient id="cg1" x1="0" y1="0" x2="0" y2="1">
                                <stop offset="0%" stop-color="rgba(201,168,76,0.28)" />
                                <stop offset="100%" stop-color="rgba(201,168,76,0.04)" />
                            </linearGradient>
                        </defs>
                        <polygon points="400,8 404,8 410,38 420,58 425,78 430,118 432,138 434,158 436,178 438,198 440,218 445,238 450,258 355,258 360,238 365,218 367,198 371,158 373,138 375,118 377,98 380,78 385,58 395,38" fill="url(#cg1)" />
                        <rect x="100" y="138" width="48" height="120" fill="url(#cg1)" />
                        <rect x="160" y="158" width="38" height="100" fill="url(#cg1)" />
                        <rect x="210" y="118" width="52" height="140" fill="url(#cg1)" />
                        <rect x="270" y="148" width="38" height="110" fill="url(#cg1)" />
                        <rect x="500" y="128" width="52" height="130" fill="url(#cg1)" />
                        <rect x="562" y="142" width="42" height="116" fill="url(#cg1)" />
                        <rect x="615" y="162" width="38" height="96" fill="url(#cg1)" />
                        <rect x="662" y="138" width="56" height="120" fill="url(#cg1)" />
                    </svg>
                    <div style="position:relative;z-index:2;text-align:center;">
                        <div style="font-size:52px;color:rgba(201,168,76,0.15);">🏙️</div>
                        <div style="font-size:10px;letter-spacing:4px;color:var(--gold);text-transform:uppercase;margin-top:6px;">Dubai, UAE</div>
                        <div style="font-size:11px;color:var(--mut);margin-top:3px;">DFSA Compliant Operations</div>
                    </div>
                </div>
                <div class="creds">
                    <div class="cred">
                        <div class="cval">MT5</div>
                        <div class="ckey">Certified EAs</div>
                    </div>
                    <div class="cred">
                        <div class="cval">ISO</div>
                        <div class="ckey">Risk Protocols</div>
                    </div>
                    <div class="cred">
                        <div class="cval">99%</div>
                        <div class="ckey">History Quality</div>
                    </div>
                    <div class="cred">
                        <div class="cval">8+</div>
                        <div class="ckey">Years of Data</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- BOTS -->
    <section class="bots" id="bots">
        <div class="slabel rev">Our Products</div>
        <h2 class="rev">MetaTrader 5 <em>Expert Advisors</em></h2>
        <p class="sdesc rev">Six institutional-grade EAs — each engineered for specific market conditions, risk profiles and trading styles. Prices from $199 to $999.</p>
        <div class="bgrid">
            <div class="bc rev" onclick="openModal('Nova Scalper Pro')">
                <div class="bhead">
                    <div class="btype">Scalping EA</div>
                    <div class="bname">Nova Scalper Pro</div>
                </div>
                <div class="bbody">
                    <svg class="mchart" viewBox="0 0 260 72">
                        <defs>
                            <linearGradient id="g1" x1="0" y1="0" x2="0" y2="1">
                                <stop offset="0%" stop-color="#2FE09A" stop-opacity="0.25" />
                                <stop offset="100%" stop-color="#2FE09A" stop-opacity="0" />
                            </linearGradient>
                        </defs>
                        <path d="M0,58 C20,52 35,46 55,38 C75,28 85,33 105,22 C125,13 135,18 155,9 C175,4 190,7 215,4 C235,2 248,2 260,1 L260,72 L0,72 Z" fill="url(#g1)" />
                        <path d="M0,58 C20,52 35,46 55,38 C75,28 85,33 105,22 C125,13 135,18 155,9 C175,4 190,7 215,4 C235,2 248,2 260,1" fill="none" stroke="#2FE09A" stroke-width="1.5" />
                    </svg>
                    <div class="mets">
                        <div class="met">
                            <div class="mv">87.3%</div>
                            <div class="mk">Win Rate</div>
                        </div>
                        <div class="met">
                            <div class="mv">+312%</div>
                            <div class="mk">Gain 2Y</div>
                        </div>
                        <div class="met">
                            <div class="mv r">-4.1%</div>
                            <div class="mk">Max DD</div>
                        </div>
                    </div>
                    <ul class="bfl">
                        <li>EURUSD, GBPUSD, USDJPY</li>
                        <li>M5, M15 Timeframes</li>
                        <li>Smart trailing stop-loss</li>
                        <li>News filter built-in</li>
                    </ul>
                    <div class="bprice"><span class="pm">$199</span><span class="pp">one-time</span><span class="pw">$299</span></div>
                    <button class="bbtn">Purchase Bot →</button>
                </div>
            </div>
            <div class="bc hot rev" onclick="openModal('Veda Trend Hunter')">
                <div class="bbadge">🔥 Best Seller</div>
                <div class="bhead">
                    <div class="btype">Trend Following EA · XAUUSD</div>
                    <div class="bname">Veda Trend Hunter</div>
                </div>
                <div class="bbody">
                    <svg class="mchart" viewBox="0 0 260 72">
                        <defs>
                            <linearGradient id="g2" x1="0" y1="0" x2="0" y2="1">
                                <stop offset="0%" stop-color="#C9A84C" stop-opacity="0.35" />
                                <stop offset="100%" stop-color="#C9A84C" stop-opacity="0" />
                            </linearGradient>
                        </defs>
                        <path d="M0,66 C28,64 48,60 68,52 C88,43 98,48 118,36 C138,24 148,28 168,16 C188,7 208,10 228,5 C244,2 252,2 260,1 L260,72 L0,72 Z" fill="url(#g2)" />
                        <path d="M0,66 C28,64 48,60 68,52 C88,43 98,48 118,36 C138,24 148,28 168,16 C188,7 208,10 228,5 C244,2 252,2 260,1" fill="none" stroke="#C9A84C" stroke-width="2" />
                    </svg>
                    <div class="mets">
                        <div class="met">
                            <div class="mv">72.7%</div>
                            <div class="mk">Win Rate</div>
                        </div>
                        <div class="met">
                            <div class="mv">+1,975%</div>
                            <div class="mk">Return</div>
                        </div>
                        <div class="met">
                            <div class="mv r">-47.8%</div>
                            <div class="mk">Max DD</div>
                        </div>
                    </div>
                    <ul class="bfl">
                        <li>XAUUSD · M15 · Vantage tested</li>
                        <li>MA 21 + Parabolic SAR + Patterns</li>
                        <li>220 trades · Sharpe 5.11</li>
                        <li>$250 → $5,188 in 3 months</li>
                    </ul>
                    <div class="bprice"><span class="pm">$499</span><span class="pp">one-time</span><span class="pw">$799</span></div>
                    <button class="bbtn">Purchase Bot →</button>
                </div>
            </div>
            <div class="bc rev" onclick="openModal('SKS AurumGold EA')">
                <div class="bbadge" style="background:linear-gradient(135deg,#8A6B28,#C9A84C);">Gold Specialist</div>
                <div class="bhead">
                    <div class="btype">Commodity EA · XAUUSD</div>
                    <div class="bname">SKS AurumGold EA</div>
                </div>
                <div class="bbody">
                    <svg class="mchart" viewBox="0 0 260 72">
                        <defs>
                            <linearGradient id="g3" x1="0" y1="0" x2="0" y2="1">
                                <stop offset="0%" stop-color="#3DAAFF" stop-opacity="0.25" />
                                <stop offset="100%" stop-color="#3DAAFF" stop-opacity="0" />
                            </linearGradient>
                        </defs>
                        <path d="M0,62 C15,58 30,54 50,47 C70,39 80,44 100,37 C120,29 130,22 158,14 C178,7 198,12 218,8 C238,4 250,4 260,3 L260,72 L0,72 Z" fill="url(#g3)" />
                        <path d="M0,62 C15,58 30,54 50,47 C70,39 80,44 100,37 C120,29 130,22 158,14 C178,7 198,12 218,8 C238,4 250,4 260,3" fill="none" stroke="#3DAAFF" stroke-width="1.5" />
                    </svg>
                    <div class="mets">
                        <div class="met">
                            <div class="mv">91.2%</div>
                            <div class="mk">Win Rate</div>
                        </div>
                        <div class="met">
                            <div class="mv">+621%</div>
                            <div class="mk">Gain 4Y</div>
                        </div>
                        <div class="met">
                            <div class="mv r">-5.8%</div>
                            <div class="mk">Max DD</div>
                        </div>
                    </div>
                    <ul class="bfl">
                        <li>XAUUSD exclusive strategy</li>
                        <li>H1, H4 Timeframes</li>
                        <li>Session-based London/NY entries</li>
                        <li>Economic calendar filter</li>
                    </ul>
                    <div class="bprice"><span class="pm">$399</span><span class="pp">one-time</span><span class="pw">$599</span></div>
                    <button class="bbtn">Purchase Bot →</button>
                </div>
            </div>
            <div class="bc rev" onclick="openModal('SKS Magic XAUUSD 7')">
                <div class="bbadge" style="background:linear-gradient(135deg,#1a3a2a,#2FE09A);color:#050810;">Live Tested</div>
                <div class="bhead">
                    <div class="btype">MA + SAR Trend EA · XAUUSD</div>
                    <div class="bname">SKS Magic XAUUSD 7</div>
                </div>
                <div class="bbody">
                    <svg class="mchart" viewBox="0 0 260 72">
                        <defs>
                            <linearGradient id="g4" x1="0" y1="0" x2="0" y2="1">
                                <stop offset="0%" stop-color="#2FE09A" stop-opacity="0.22" />
                                <stop offset="100%" stop-color="#2FE09A" stop-opacity="0" />
                            </linearGradient>
                        </defs>
                        <path d="M0,68 C25,67 40,65 55,62 C70,59 90,56 110,48 C130,40 150,36 165,26 C180,18 200,14 220,9 C240,5 250,4 260,3 L260,72 L0,72 Z" fill="url(#g4)" />
                        <path d="M0,68 C25,67 40,65 55,62 C70,59 90,56 110,48 C130,40 150,36 165,26 C180,18 200,14 220,9 C240,5 250,4 260,3" fill="none" stroke="#2FE09A" stroke-width="1.5" />
                    </svg>
                    <div class="mets">
                        <div class="met">
                            <div class="mv">71.1%</div>
                            <div class="mk">Win Rate</div>
                        </div>
                        <div class="met">
                            <div class="mv">+1,403%</div>
                            <div class="mk">Return</div>
                        </div>
                        <div class="met">
                            <div class="mv r">-47.7%</div>
                            <div class="mk">Max DD</div>
                        </div>
                    </div>
                    <ul class="bfl">
                        <li>XAUUSD · M15 · Exness tested</li>
                        <li>MA Period 21 + Parabolic SAR</li>
                        <li>211 trades · Sharpe 4.04</li>
                        <li>Long 76.98% / Short 59.72%</li>
                    </ul>
                    <div class="bprice"><span class="pm">$599</span><span class="pp">one-time</span><span class="pw">$899</span></div>
                    <button class="bbtn">Purchase Bot →</button>
                </div>
            </div>
            <div class="bc rev" onclick="openModal('SKS XAUUSD Magic V2')">
                <div class="bhead">
                    <div class="btype">Pattern Recognition EA · XAUUSD</div>
                    <div class="bname">SKS XAUUSD Magic V2</div>
                </div>
                <div class="bbody">
                    <svg class="mchart" viewBox="0 0 260 72">
                        <defs>
                            <linearGradient id="g5" x1="0" y1="0" x2="0" y2="1">
                                <stop offset="0%" stop-color="#3DAAFF" stop-opacity="0.22" />
                                <stop offset="100%" stop-color="#3DAAFF" stop-opacity="0" />
                            </linearGradient>
                        </defs>
                        <path d="M0,66 C18,64 32,61 50,56 C68,50 85,43 105,34 C125,25 145,20 165,14 C185,9 210,7 235,4 C248,3 255,3 260,2 L260,72 L0,72 Z" fill="url(#g5)" />
                        <path d="M0,66 C18,64 32,61 50,56 C68,50 85,43 105,34 C125,25 145,20 165,14 C185,9 210,7 235,4 C248,3 255,3 260,2" fill="none" stroke="#3DAAFF" stroke-width="1.5" />
                    </svg>
                    <div class="mets">
                        <div class="met">
                            <div class="mv">74.5%</div>
                            <div class="mk">Win Rate</div>
                        </div>
                        <div class="met">
                            <div class="mv">+963%</div>
                            <div class="mk">Return</div>
                        </div>
                        <div class="met">
                            <div class="mv r">-38.5%</div>
                            <div class="mk">Max DD</div>
                        </div>
                    </div>
                    <ul class="bfl">
                        <li>XAUUSD · M15 · 98% quality data</li>
                        <li>Engulfing, Hammer, Pin Bar, Doji</li>
                        <li>157 trades · Sharpe 4.92</li>
                        <li>Long 76.70% / Short 70.37%</li>
                    </ul>
                    <div class="bprice"><span class="pm">$449</span><span class="pp">one-time</span><span class="pw">$699</span></div>
                    <button class="bbtn">Purchase Bot →</button>
                </div>
            </div>
            <div class="bc hot rev" onclick="openModal('VedNova Apex Bundle')">
                <div class="bbadge">👑 Premium Bundle</div>
                <div class="bhead">
                    <div class="btype">Full Suite EA Bundle</div>
                    <div class="bname">VedNova Apex Bundle</div>
                </div>
                <div class="bbody">
                    <svg class="mchart" viewBox="0 0 260 72">
                        <defs>
                            <linearGradient id="g6" x1="0" y1="0" x2="0" y2="1">
                                <stop offset="0%" stop-color="#E8C97A" stop-opacity="0.38" />
                                <stop offset="100%" stop-color="#E8C97A" stop-opacity="0" />
                            </linearGradient>
                        </defs>
                        <path d="M0,68 C22,66 38,62 58,54 C78,45 100,36 124,24 C148,13 175,8 205,5 C230,3 248,2 260,1 L260,72 L0,72 Z" fill="url(#g6)" />
                        <path d="M0,68 C22,66 38,62 58,54 C78,45 100,36 124,24 C148,13 175,8 205,5 C230,3 248,2 260,1" fill="none" stroke="#E8C97A" stroke-width="2" />
                    </svg>
                    <div class="mets">
                        <div class="met">
                            <div class="mv">94%</div>
                            <div class="mk">Win Rate</div>
                        </div>
                        <div class="met">
                            <div class="mv">+1,975%</div>
                            <div class="mk">Best EA</div>
                        </div>
                        <div class="met">
                            <div class="mv r">-6.8%</div>
                            <div class="mk">Avg DD</div>
                        </div>
                    </div>
                    <ul class="bfl">
                        <li>All 5 EAs in one package</li>
                        <li>Portfolio diversification mode</li>
                        <li>1-on-1 Dubai setup assistance</li>
                        <li>Lifetime updates + priority support</li>
                    </ul>
                    <div class="bprice"><span class="pm">$999</span><span class="pp">one-time</span><span class="pw">$1,849</span></div>
                    <button class="bbtn">Purchase Bundle →</button>
                </div>
            </div>
        </div>
    </section>

    <!-- BACKTEST -->
    <section class="bt" id="backtest">
        <div class="slabel rev">Verified Results</div>
        <h2 class="rev">Real MT5 <em>Strategy Tester</em> Reports</h2>
        <p class="sdesc rev">Extracted directly from MetaTrader 5 Strategy Tester (Build 5660) on Exness/Vantage. Zero manipulation — these are our actual EA reports.</p>
        <div class="qbadges">
            <div class="qb rev"><span>✓ 98–99% History Quality</span></div>
            <div class="qb rev"><span>✓ Exness &amp; Vantage MT5 · Build 5660</span></div>
            <div class="qb rev"><span>✓ Real Tick Data · Variable Spreads</span></div>
            <div class="qb rev"><span>✓ 38,699,285 Ticks Processed</span></div>
        </div>
        <div class="btg">
            <!-- CARD 1 -->
            <div class="btc gb rev" style="position:relative;">
                <div class="tbar g"></div>
                <div class="btbdg">🔥 TOP PERFORMER</div>
                <div class="bth">
                    <div>
                        <div class="btn2">Veda Trend Hunter EA</div>
                        <div class="btm">XAUUSD · M15 · $250 Initial · Jan–Mar 2026</div>
                        <div class="bttags"><span class="bttag">Vantage International MT5</span><span class="bttag">99% Quality</span><span class="bttag">1:100</span></div>
                    </div>
                    <div style="text-align:right;flex-shrink:0;margin-top:8px;">
                        <div style="font-size:10px;letter-spacing:2px;color:var(--mut);">2026</div>
                        <div class="ver">✓ REAL DATA</div>
                    </div>
                </div>
                <div class="bt-chart" style="width:100%;height:140px;margin-bottom:14px;">
                    <svg width="100%" height="100%" viewBox="0 0 480 140" preserveAspectRatio="none">
                        <defs>
                            <linearGradient id="bc1" x1="0" y1="0" x2="0" y2="1">
                                <stop offset="0%" stop-color="#C9A84C" stop-opacity="0.25" />
                                <stop offset="100%" stop-color="#C9A84C" stop-opacity="0" />
                            </linearGradient>
                        </defs>
                        <line x1="30" y1="28" x2="480" y2="28" stroke="rgba(255,255,255,0.04)" stroke-width="1" />
                        <line x1="30" y1="70" x2="480" y2="70" stroke="rgba(255,255,255,0.04)" stroke-width="1" />
                        <line x1="30" y1="112" x2="480" y2="112" stroke="rgba(255,255,255,0.04)" stroke-width="1" />
                        <text x="2" y="12" font-family="Space Mono" font-size="7" fill="rgba(201,168,76,0.45)">5.1k</text>
                        <text x="2" y="54" font-family="Space Mono" font-size="7" fill="rgba(201,168,76,0.3)">3.5k</text>
                        <text x="2" y="96" font-family="Space Mono" font-size="7" fill="rgba(201,168,76,0.3)">1.8k</text>
                        <path d="M30,136 C60,135 80,134 100,132 C120,130 130,129 145,127 C160,124 165,120 180,115 C195,109 200,113 215,104 C228,95 234,92 248,80 C260,68 265,72 278,58 C290,44 295,48 308,38 C318,30 324,26 336,22 C346,18 352,23 365,30 C375,35 380,30 392,24 C404,18 415,16 428,13 C442,10 456,9 470,10 C475,11 478,12 480,11 L480,138 L30,138 Z" fill="url(#bc1)" />
                        <path d="M30,136 C60,135 80,134 100,132 C120,130 130,129 145,127 C160,124 165,120 180,115 C195,109 200,113 215,104 C228,95 234,92 248,80 C260,68 265,72 278,58 C290,44 295,48 308,38 C318,30 324,26 336,22 C346,18 352,23 365,30 C375,35 380,30 392,24 C404,18 415,16 428,13 C442,10 456,9 470,10 C475,11 478,12 480,11" fill="none" stroke="#C9A84C" stroke-width="2" />
                        <circle cx="346" cy="18" r="3" fill="#C9A84C" />
                        <text x="314" y="14" font-family="Space Mono" font-size="7" fill="#C9A84C">Peak $5,188</text>
                    </svg>
                </div>
                <div class="hlr">
                    <div class="hlc">
                        <div class="hlv">$4,938</div>
                        <div class="hlk">Net Profit (from $250)</div>
                    </div>
                    <div class="hlc">
                        <div class="hlv">+1,975%</div>
                        <div class="hlk">Total Return</div>
                    </div>
                </div>
                <div class="bts2">
                    <div class="bs">
                        <div class="bsv">72.73%</div>
                        <div class="bsk">Win Rate</div>
                    </div>
                    <div class="bs">
                        <div class="bsv">220</div>
                        <div class="bsk">Total Trades</div>
                    </div>
                    <div class="bs">
                        <div class="bsv">1.47</div>
                        <div class="bsk">Profit Factor</div>
                    </div>
                    <div class="bs">
                        <div class="bsv">5.11</div>
                        <div class="bsk">Sharpe Ratio</div>
                    </div>
                    <div class="bs">
                        <div class="bsv w">47.83%</div>
                        <div class="bsk">Max DD (Equity)</div>
                        <div class="ddb">
                            <div class="ddf" style="width:47.83%"></div>
                        </div>
                    </div>
                    <div class="bs">
                        <div class="bsv">1.68</div>
                        <div class="bsk">Recovery Factor</div>
                    </div>
                </div>
                <div class="bkdn">
                    <div class="bklbl" style="color:var(--gold);">FULL BREAKDOWN</div>
                    <div class="bkg">
                        <span>Long Trades Won: <b class="g">124 (77.42%)</b></span>
                        <span>Short Trades Won: <b class="g">96 (66.67%)</b></span>
                        <span>Largest Profit: <b class="g">$1,307.61</b></span>
                        <span>Largest Loss: <b class="r">-$530.66</b></span>
                        <span>Avg Profit: <b class="g">$96.74</b></span>
                        <span>Avg Loss: <b class="r">-$175.66</b></span>
                        <span>AHPR: <b class="o">1.0187 (1.87%)</b></span>
                        <span>GHPR: <b class="o">1.0139 (1.39%)</b></span>
                        <span>LR Correlation: <b class="o">0.90</b></span>
                        <span>Gross Profit: <b class="g">$15,477.75</b></span>
                    </div>
                </div>
            </div>
            <!-- CARD 2 -->
            <div class="btc bb rev" style="position:relative;">
                <div class="tbar b"></div>
                <div class="bth">
                    <div>
                        <div class="btn2">SKS XAUUSD MAGIC V2</div>
                        <div class="btm">XAUUSD · M15 · $10,000 Initial · Jan–Mar 2026</div>
                        <div class="bttags"><span class="bttag">Engulfing + Hammer</span><span class="bttag">Doji + Pin Bar</span><span class="bttag">1:100</span></div>
                    </div>
                    <div style="text-align:right;flex-shrink:0;margin-top:8px;">
                        <div style="font-size:10px;letter-spacing:2px;color:var(--mut);">2026</div>
                        <div class="ver">✓ REAL DATA</div>
                    </div>
                </div>
                <div style="width:100%;height:140px;margin-bottom:14px;">
                    <svg width="100%" height="100%" viewBox="0 0 480 140" preserveAspectRatio="none">
                        <defs>
                            <linearGradient id="bc2" x1="0" y1="0" x2="0" y2="1">
                                <stop offset="0%" stop-color="#3DAAFF" stop-opacity="0.22" />
                                <stop offset="100%" stop-color="#3DAAFF" stop-opacity="0" />
                            </linearGradient>
                        </defs>
                        <line x1="30" y1="28" x2="480" y2="28" stroke="rgba(255,255,255,0.04)" stroke-width="1" />
                        <line x1="30" y1="70" x2="480" y2="70" stroke="rgba(255,255,255,0.04)" stroke-width="1" />
                        <line x1="30" y1="112" x2="480" y2="112" stroke="rgba(255,255,255,0.04)" stroke-width="1" />
                        <text x="2" y="12" font-family="Space Mono" font-size="7" fill="rgba(61,170,255,0.5)">133k</text>
                        <text x="2" y="54" font-family="Space Mono" font-size="7" fill="rgba(61,170,255,0.3)">107k</text>
                        <text x="2" y="96" font-family="Space Mono" font-size="7" fill="rgba(61,170,255,0.3)">81k</text>
                        <path d="M30,136 C50,135 65,134 80,132 C100,130 115,128 130,126 C145,123 152,119 165,114 C178,109 185,112 198,104 C210,96 216,93 228,84 C240,74 246,70 258,60 C270,50 276,46 290,38 C302,30 308,26 320,20 C330,15 338,12 350,10 C362,8 370,12 380,16 C390,20 398,16 408,12 C420,8 440,7 460,9 C470,10 476,11 480,10 L480,138 L30,138 Z" fill="url(#bc2)" />
                        <path d="M30,136 C50,135 65,134 80,132 C100,130 115,128 130,126 C145,123 152,119 165,114 C178,109 185,112 198,104 C210,96 216,93 228,84 C240,74 246,70 258,60 C270,50 276,46 290,38 C302,30 308,26 320,20 C330,15 338,12 350,10 C362,8 370,12 380,16 C390,20 398,16 408,12 C420,8 440,7 460,9 C470,10 476,11 480,10" fill="none" stroke="#3DAAFF" stroke-width="2" />
                        <circle cx="350" cy="10" r="3" fill="#3DAAFF" />
                        <text x="318" y="7" font-family="Space Mono" font-size="7" fill="#3DAAFF">Peak $133k</text>
                    </svg>
                </div>
                <div class="hlr">
                    <div class="hlc">
                        <div class="hlv">$96,335</div>
                        <div class="hlk">Net Profit (from $10k)</div>
                    </div>
                    <div class="hlc">
                        <div class="hlv">+963%</div>
                        <div class="hlk">Total Return</div>
                    </div>
                </div>
                <div class="bts2">
                    <div class="bs">
                        <div class="bsv" style="color:#3DAAFF;">74.52%</div>
                        <div class="bsk">Win Rate</div>
                    </div>
                    <div class="bs">
                        <div class="bsv" style="color:#3DAAFF;">157</div>
                        <div class="bsk">Total Trades</div>
                    </div>
                    <div class="bs">
                        <div class="bsv" style="color:#3DAAFF;">1.43</div>
                        <div class="bsk">Profit Factor</div>
                    </div>
                    <div class="bs">
                        <div class="bsv" style="color:#3DAAFF;">4.92</div>
                        <div class="bsk">Sharpe Ratio</div>
                    </div>
                    <div class="bs">
                        <div class="bsv w">38.48%</div>
                        <div class="bsk">Max Drawdown</div>
                        <div class="ddb">
                            <div class="ddf" style="width:38.48%;background:linear-gradient(90deg,#3DAAFF,rgba(61,170,255,0.2));"></div>
                        </div>
                    </div>
                    <div class="bs">
                        <div class="bsv" style="color:#3DAAFF;">1.59</div>
                        <div class="bsk">Recovery Factor</div>
                    </div>
                </div>
                <div class="bkdn">
                    <div class="bklbl" style="color:#3DAAFF;">FULL BREAKDOWN</div>
                    <div class="bkg">
                        <span>Long Trades Won: <b class="g">103 (76.70%)</b></span>
                        <span>Short Trades Won: <b class="g">54 (70.37%)</b></span>
                        <span>Largest Profit: <b class="g">$19,490.67</b></span>
                        <span>Largest Loss: <b class="r">-$13,488.48</b></span>
                        <span>Avg Profit: <b class="g">$2,732.41</b></span>
                        <span>Avg Loss: <b class="r">-$5,583.92</b></span>
                        <span>AHPR: <b class="b">1.0196 (1.96%)</b></span>
                        <span>GHPR: <b class="b">1.0152 (1.52%)</b></span>
                        <span>LR Correlation: <b class="b">0.93</b></span>
                        <span>Gross Profit: <b class="g">$319,692.35</b></span>
                    </div>
                </div>
            </div>
            <!-- CARD 3 FULL WIDTH -->
            <div class="btc full rb rev" style="position:relative;">
                <div class="tbar r"></div>
                <div class="bth">
                    <div>
                        <div class="btn2">SKS AUTOTRADER V2</div>
                        <div class="btm">Multi-Pair · 345 Trades · 690 Deals · GHPR: 1.0077</div>
                        <div class="bttags"><span class="bttag">Fully Automated</span><span class="bttag">Long &amp; Short</span><span class="bttag">LR Std Error: 23,254</span></div>
                    </div>
                    <div style="text-align:right;flex-shrink:0;margin-top:8px;">
                        <div style="font-size:10px;letter-spacing:2px;color:var(--mut);">MULTI-PAIR</div>
                        <div class="ver">✓ REAL DATA</div>
                    </div>
                </div>
                <div style="width:100%;height:160px;margin-bottom:16px;">
                    <svg width="100%" height="100%" viewBox="0 0 900 160" preserveAspectRatio="none">
                        <defs>
                            <linearGradient id="bc3" x1="0" y1="0" x2="0" y2="1">
                                <stop offset="0%" stop-color="#2FE09A" stop-opacity="0.18" />
                                <stop offset="100%" stop-color="#2FE09A" stop-opacity="0" />
                            </linearGradient>
                        </defs>
                        <line x1="30" y1="20" x2="900" y2="20" stroke="rgba(255,255,255,0.04)" stroke-width="1" />
                        <line x1="30" y1="60" x2="900" y2="60" stroke="rgba(255,255,255,0.04)" stroke-width="1" />
                        <line x1="30" y1="100" x2="900" y2="100" stroke="rgba(255,255,255,0.04)" stroke-width="1" />
                        <line x1="30" y1="140" x2="900" y2="140" stroke="rgba(255,255,255,0.04)" stroke-width="1" />
                        <text x="2" y="12" font-family="Space Mono" font-size="7" fill="rgba(47,224,154,0.5)">166k</text>
                        <text x="2" y="52" font-family="Space Mono" font-size="7" fill="rgba(47,224,154,0.3)">133k</text>
                        <text x="2" y="92" font-family="Space Mono" font-size="7" fill="rgba(47,224,154,0.3)">100k</text>
                        <path d="M30,152 C60,149 80,144 105,136 C120,130 124,134 138,126 C152,117 158,121 175,109 C192,97 196,102 212,90 C228,78 232,74 248,96 C258,110 262,102 278,86 C294,71 300,76 316,62 C330,50 336,54 350,46 C364,38 368,42 382,36 C396,30 400,34 414,30 C428,26 434,30 448,28 C462,26 468,28 480,26 C494,24 500,28 516,26 C530,24 538,22 552,22 C564,22 570,20 584,18 C598,16 604,20 618,22 C630,24 634,20 648,18 C660,16 666,14 680,12 C694,10 698,14 712,16 C724,18 730,14 744,14 C758,14 764,12 778,14 C792,16 800,18 816,20 C828,22 838,20 852,16 C866,12 878,10 900,8 L900,156 L30,156 Z" fill="url(#bc3)" />
                        <path d="M30,152 C60,149 80,144 105,136 C120,130 124,134 138,126 C152,117 158,121 175,109 C192,97 196,102 212,90 C228,78 232,74 248,96 C258,110 262,102 278,86 C294,71 300,76 316,62 C330,50 336,54 350,46 C364,38 368,42 382,36 C396,30 400,34 414,30 C428,26 434,30 448,28 C462,26 468,28 480,26 C494,24 500,28 516,26 C530,24 538,22 552,22 C564,22 570,20 584,18 C598,16 604,20 618,22 C630,24 634,20 648,18 C660,16 666,14 680,12 C694,10 698,14 712,16 C724,18 730,14 744,14 C758,14 764,12 778,14 C792,16 800,18 816,20 C828,22 838,20 852,16 C866,12 878,10 900,8" fill="none" stroke="#2FE09A" stroke-width="1.8" />
                        <line x1="248" y1="96" x2="248" y2="156" stroke="rgba(255,77,106,0.2)" stroke-width="1" stroke-dasharray="3,3" />
                        <text x="220" y="104" font-family="Space Mono" font-size="6" fill="rgba(255,77,106,0.5)">DD zone</text>
                        <text x="840" y="16" font-family="Space Mono" font-size="7" fill="#2FE09A">$166,258</text>
                    </svg>
                </div>
                <div class="av2s">
                    <div class="hlc">
                        <div class="hlv" style="color:var(--grn);">$166,258</div>
                        <div class="hlk">Final Balance</div>
                    </div>
                    <div class="hlc">
                        <div class="hlv" style="color:var(--grn);">345</div>
                        <div class="hlk">Total Trades</div>
                    </div>
                    <div class="hlc">
                        <div class="hlv" style="color:var(--gold);">51.52%</div>
                        <div class="hlk">Long Win Rate</div>
                    </div>
                    <div class="hlc">
                        <div class="hlv" style="color:var(--gold);">44.22%</div>
                        <div class="hlk">Short Win Rate</div>
                    </div>
                </div>
                <div class="av2c3">
                    <div class="av2i">
                        <div class="t" style="color:var(--grn);">PROFIT METRICS</div>
                        <ul>
                            <li>Profit Trades: <b style="color:var(--grn);">167 (48.41%)</b></li>
                            <li>Loss Trades: <b style="color:var(--red);">178 (51.59%)</b></li>
                            <li>Avg Profit: <b style="color:var(--grn);">$2,535.75</b></li>
                            <li>Avg Loss: <b style="color:var(--red);">-$1,644.27</b></li>
                        </ul>
                    </div>
                    <div class="av2i">
                        <div class="t" style="color:var(--grn);">EXTREME VALUES</div>
                        <ul>
                            <li>Best Trade: <b style="color:var(--grn);">$19,807.92</b></li>
                            <li>Worst Trade: <b style="color:var(--red);">-$13,963.18</b></li>
                            <li>Max Wins Consec: <b style="color:var(--gold);">15</b></li>
                            <li>Max Loss Consec: <b style="color:var(--red);">15</b></li>
                        </ul>
                    </div>
                    <div class="av2i">
                        <div class="t" style="color:var(--grn);">SYSTEM QUALITY</div>
                        <ul>
                            <li>GHPR: <b style="color:var(--gold);">1.0077 (0.77%)</b></li>
                            <li>LR Std Error: <b style="color:var(--gold);">23,254.78</b></li>
                            <li>Avg Consec Wins: <b style="color:var(--grn);">5</b></li>
                            <li>Avg Consec Loss: <b style="color:var(--red);">5</b></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="rev" style="margin-top:36px;background:var(--panel);border:1px solid var(--brd);padding:26px 30px;display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:18px;">
            <div>
                <div style="font-family:'Cormorant Garamond',serif;font-size:22px;font-weight:300;margin-bottom:5px;">Want the Full MT5 Strategy Tester Reports?</div>
                <div style="font-size:12px;color:var(--mut);">Complete 30+ page reports with trade-by-trade breakdown available on request.</div>
            </div>
            <button class="btn btn-g" onclick="openModal('Full Backtest Reports')">Request Full Reports →</button>
        </div>
    </section>

    <!-- SIGNALS -->
    <section class="sigs" id="signals">
        <div class="slabel rev">Live Intelligence</div>
        <h2 class="rev">Premium Forex <em>Signals</em></h2>
        <p class="sdesc rev">Manually curated and AI-screened signals delivered via Telegram, WhatsApp and MT5 direct push. Entry, TP and SL levels with full analysis on every signal.</p>

        <!-- MQL5 WIDGET + INFO -->
        <div class="widget-wrap rev">
            <div class="widget-box">
                <div style="font-size:10px;letter-spacing:3px;color:var(--gold);text-transform:uppercase;margin-bottom:14px;display:flex;align-items:center;gap:8px;"><span style="width:20px;height:1px;background:var(--gold);display:inline-block;"></span>Live MQL5 Signal Performance</div>
                <div style="width:410px;max-width:100%;text-align:center;line-height:26px;">
                    <iframe frameborder="0" width="100%" height="390" src="https://www.mql5.com/en/signals/widget/top/7baa?fw=html"></iframe>
                    <div class="sw-copyright" style="font-size:10px;color:var(--mut);margin-top:6px;"><a href="https://www.mql5.com/?utm_source=signals.widget&utm_medium=link&utm_term=signals&utm_content=visit.mql5.signals&utm_campaign=202.signals.widget" rel="noopener nofollow" target="_blank" style="color:var(--mut);">MQL5 Algo Trading Community</a></div>
                </div>
            </div>
            <div class="widget-info">
                <h3 style="font-family:'Cormorant Garamond',serif;font-size:26px;font-weight:300;margin-bottom:12px;">Real-Time <em style="font-style:italic;color:var(--gl);">Verified</em> Performance</h3>
                <p style="font-size:13px;color:var(--mut);line-height:1.7;margin-bottom:18px;">Our live MQL5 signal account is fully verified and publicly audited. Every trade is logged in real-time — no manipulation, no cherry-picking.</p>
                <div class="witem"><span class="wdot"></span>Trades verified by MQL5 independently</div>
                <div class="witem"><span class="wdot"></span>Live equity curve updated after every trade</div>
                <div class="witem"><span class="wdot"></span>Full trade history visible to subscribers</div>
                <div class="witem"><span class="wdot"></span>Signals copied directly to your MT5 account</div>
                <div style="margin-top:24px;"><a href="https://www.mql5.com/en/signals/7baa" target="_blank" rel="noopener nofollow" class="btn btn-g" style="font-size:11px;padding:10px 22px;">View Full Stats on MQL5 →</a></div>
            </div>
        </div>

        <div class="sigg">
            <div class="sc rev">
                <div class="slive"><span class="dot"></span>Live Signal</div>
                <div class="spair">EUR/USD</div>
                <div class="sdir buy">BUY</div>
                <div class="slvls">
                    <div class="slv">
                        <div class="slvv">1.0842</div>
                        <div class="slvk">Entry</div>
                    </div>
                    <div class="slv">
                        <div class="slvv" style="color:var(--grn);">1.0920</div>
                        <div class="slvk">TP</div>
                    </div>
                    <div class="slv">
                        <div class="slvv" style="color:var(--red);">1.0810</div>
                        <div class="slvk">SL</div>
                    </div>
                </div>
                <p class="snote">Bullish engulfing on H4 + RSI divergence. London session breakout above 1.0835. Target Daily R2.</p>
                <div class="splan"><span class="spname">Starter Plan</span><span class="spprice">$99<small style="font-size:11px;color:var(--mut);">/mo</small></span></div>
            </div>
            <div class="sc hot rev" style="position:relative;">
                <div style="position:absolute;top:0;left:0;right:0;height:2px;background:linear-gradient(90deg,var(--gold),var(--gd));"></div>
                <div class="slive"><span class="dot"></span>Live Signal</div>
                <div class="spair">XAU/USD</div>
                <div class="sdir sell">SELL</div>
                <div class="slvls">
                    <div class="slv">
                        <div class="slvv">2,384.50</div>
                        <div class="slvk">Entry</div>
                    </div>
                    <div class="slv">
                        <div class="slvv" style="color:var(--grn);">2,340.00</div>
                        <div class="slvk">TP</div>
                    </div>
                    <div class="slv">
                        <div class="slvv" style="color:var(--red);">2,395.00</div>
                        <div class="slvk">SL</div>
                    </div>
                </div>
                <p class="snote">Gold rejected at 2,390 resistance. Double top H1 confirmed. DXY strength supporting downside.</p>
                <div class="splan"><span class="spname">⭐ Pro Plan</span><span class="spprice">$199<small style="font-size:11px;color:var(--mut);">/mo</small></span></div>
            </div>
            <div class="sc rev">
                <div class="slive"><span class="dot"></span>Live Signal</div>
                <div class="spair">GBP/JPY</div>
                <div class="sdir buy">BUY</div>
                <div class="slvls">
                    <div class="slv">
                        <div class="slvv">192.40</div>
                        <div class="slvk">Entry</div>
                    </div>
                    <div class="slv">
                        <div class="slvv" style="color:var(--grn);">193.80</div>
                        <div class="slvk">TP</div>
                    </div>
                    <div class="slv">
                        <div class="slvv" style="color:var(--red);">191.80</div>
                        <div class="slvk">SL</div>
                    </div>
                </div>
                <p class="snote">GBP/JPY breakout from ascending triangle H4. BOJ dovish stance continues. R:R ratio 1:2.3.</p>
                <div class="splan"><span class="spname">Elite Plan</span><span class="spprice">$349<small style="font-size:11px;color:var(--mut);">/mo</small></span></div>
            </div>
        </div>
        <div class="splans">
            <div class="sp2 rev">
                <div class="sptier">Starter</div>
                <div class="spprc">$99<span style="font-size:14px;color:var(--mut);">/mo</span></div>
                <p class="spdesc">3–5 signals/week · Forex majors · Telegram delivery · Basic analysis</p><button class="btn btn-o" style="font-size:11px;padding:10px 20px;" onclick="openModal('Starter Signal Plan')">Subscribe →</button>
            </div>
            <div class="sp2 hot rev">
                <div class="sptier">⭐ Pro — Most Popular</div>
                <div class="spprc">$199<span style="font-size:14px;color:var(--mut);">/mo</span></div>
                <p class="spdesc">8–12 signals/week · Forex + Gold + Indices · MT5 push + SL management</p><button class="btn btn-g" style="font-size:11px;padding:10px 20px;" onclick="openModal('Pro Signal Plan')">Subscribe →</button>
            </div>
            <div class="sp2 rev">
                <div class="sptier">Elite</div>
                <div class="spprc">$349<span style="font-size:14px;color:var(--mut);">/mo</span></div>
                <p class="spdesc">Unlimited signals · All assets + Crypto CFDs · WhatsApp + 1-on-1 analyst calls</p><button class="btn btn-o" style="font-size:11px;padding:10px 20px;" onclick="openModal('Elite Signal Plan')">Subscribe →</button>
            </div>
        </div>
    </section>

    <!-- INVEST -->
    <section class="inv" id="invest">
        <div class="slabel rev">Passive Income</div>
        <h2 class="rev">Managed Investment <em>Plans</em></h2>
        <p class="sdesc rev">Let VedNova's algorithms trade on your behalf. Earn consistent monthly or quarterly returns with full capital transparency via investor MT5 access.</p>
        <div class="ig">
            <div class="ic rev">
                <div class="itier">Silver Tier</div>
                <div class="iname">Nova Starter</div>
                <div class="iret"><span class="rp">8</span>
                    <div>
                        <div style="font-size:16px;color:var(--grn);font-weight:600;">%</div>
                        <div class="rl">per month</div>
                    </div>
                </div>
                <div class="qrow"><span class="qv">+26%</span><span class="ql">Quarterly estimate</span></div>
                <div class="idiv"></div>
                <div class="iminv">$500</div>
                <div class="imink">Minimum Investment</div>
                <ul class="ips">
                    <li>Monthly profit withdrawals</li>
                    <li>Capital protection clause</li>
                    <li>Weekly performance reports</li>
                    <li>Secure MT5 investor password</li>
                    <li>30-day exit flexibility</li>
                </ul><button class="ibtn" onclick="openModal('Nova Starter Plan')">Invest Now</button>
            </div>
            <div class="ic hot rev">
                <div class="itier">Gold Tier</div>
                <div class="iname">Nova Growth</div>
                <div class="iret"><span class="rp">15</span>
                    <div>
                        <div style="font-size:16px;color:var(--grn);font-weight:600;">%</div>
                        <div class="rl">per month</div>
                    </div>
                </div>
                <div class="qrow"><span class="qv">+52%</span><span class="ql">Quarterly estimate</span></div>
                <div class="idiv"></div>
                <div class="iminv">$2,500</div>
                <div class="imink">Minimum Investment</div>
                <ul class="ips">
                    <li>Monthly + quarterly payouts</li>
                    <li>Dedicated account manager</li>
                    <li>Live dashboard access</li>
                    <li>Priority withdrawal (48 hrs)</li>
                    <li>Reinvestment compounding option</li>
                    <li>Semi-annual strategy review</li>
                </ul><button class="ibtn" onclick="openModal('Nova Growth Plan')">Invest Now</button>
            </div>
            <div class="ic rev">
                <div class="itier">Platinum Tier</div>
                <div class="iname">Nova Wealth</div>
                <div class="iret"><span class="rp">25</span>
                    <div>
                        <div style="font-size:16px;color:var(--grn);font-weight:600;">%</div>
                        <div class="rl">per month</div>
                    </div>
                </div>
                <div class="qrow"><span class="qv">+95%</span><span class="ql">Quarterly estimate</span></div>
                <div class="idiv"></div>
                <div class="iminv">$10,000</div>
                <div class="imink">Minimum Investment</div>
                <ul class="ips">
                    <li>Weekly profit distributions</li>
                    <li>VIP WhatsApp group access</li>
                    <li>Multi-strategy portfolio</li>
                    <li>24-hour withdrawal processing</li>
                    <li>Dubai office review (optional)</li>
                    <li>Estate planning advisory</li>
                </ul><button class="ibtn" onclick="openModal('Nova Wealth Plan')">Invest Now</button>
            </div>
        </div>
        <div class="arow rev">
            <div>
                <div style="font-size:10px;letter-spacing:3px;color:var(--gold);text-transform:uppercase;margin-bottom:6px;">Annual Compound</div>
                <div style="font-family:'Cormorant Garamond',serif;font-size:26px;font-weight:300;">Nova Horizon</div>
                <div style="font-size:12px;color:var(--mut);margin-top:4px;">Lock-in 12 months · Auto-compound · Quarterly reporting</div>
            </div>
            <div style="text-align:center;">
                <div style="font-family:'Cormorant Garamond',serif;font-size:58px;color:var(--grn);line-height:1;">180%</div>
                <div style="font-size:10px;letter-spacing:2px;color:var(--mut);">ANNUAL TARGET RETURN</div>
            </div>
            <div>
                <div style="font-family:'Cormorant Garamond',serif;font-size:28px;color:var(--gl);">$5,000</div>
                <div style="font-size:10px;letter-spacing:2px;color:var(--mut);text-transform:uppercase;">Minimum · 12 Month Lock</div>
                <div style="font-size:11px;color:var(--mut);margin-top:7px;">Capital protection clause included</div>
            </div>
            <button class="btn btn-g" onclick="openModal('Nova Horizon Annual')">Lock In Returns</button>
        </div>
        <div class="disc rev"><strong>⚠️ Risk Disclosure</strong>Trading forex and CFDs involves significant risk of loss. Past performance is not indicative of future results. Returns presented represent targets based on backtesting — actual returns may vary. VedNova does not guarantee profits. Please read our full Risk Disclosure before investing.</div>
    </section>

    <!-- WHY -->
    <section class="why">
        <div class="slabel rev">Why VedNova</div>
        <h2 class="rev">The <em>VedNova</em> Difference</h2>
        <div class="wg">
            <div class="wc rev">
                <div class="wnum">01</div>
                <div class="wtit">Dubai Regulated</div>
                <div class="wdesc">Operating from the UAE's financial district, VedNova adheres to DFSA standards and full financial transparency protocols.</div>
            </div>
            <div class="wc rev">
                <div class="wnum">02</div>
                <div class="wtit">Institutional Algorithms</div>
                <div class="wdesc">Our EAs use the same multi-factor quant models applied by institutional desks — adapted for retail MT5 traders.</div>
            </div>
            <div class="wc rev">
                <div class="wnum">03</div>
                <div class="wtit">Transparent Performance</div>
                <div class="wdesc">Every strategy result comes with a full MT5 Strategy Tester HTML report with trade-by-trade breakdown.</div>
            </div>
            <div class="wc rev">
                <div class="wnum">04</div>
                <div class="wtit">Lifetime Updates</div>
                <div class="wdesc">Markets evolve. Our dev team issues EA updates whenever market conditions change — at no extra cost.</div>
            </div>
        </div>
    </section>

    <!-- TESTIMONIALS -->
    <section class="testi">
        <div class="slabel rev">Client Stories</div>
        <h2 class="rev">Traders <em>Trust</em> VedNova</h2>
        <div class="tg">
            <div class="tc rev">
                <div class="stars">★★★★★</div>
                <div class="ttxt">"The SKS Magic XAUUSD 7 has been running on my account for 2 months. The returns are incredible and the Dubai support team is outstanding."</div>
                <div class="tau">
                    <div class="av">AR</div>
                    <div>
                        <div class="an">Ahmed R.</div>
                        <div class="al">Dubai, UAE · Apex Bundle</div>
                    </div>
                </div>
            </div>
            <div class="tc rev">
                <div class="stars">★★★★★</div>
                <div class="ttxt">"I invested in Nova Growth 3 months ago. Returns are consistent every month and MT5 investor access gives me full transparency."</div>
                <div class="tau">
                    <div class="av">SM</div>
                    <div>
                        <div class="an">Sofia M.</div>
                        <div class="al">London, UK · Nova Growth</div>
                    </div>
                </div>
            </div>
            <div class="tc rev">
                <div class="stars">★★★★★</div>
                <div class="ttxt">"The backtest reports are completely real — I verified the numbers myself in MT5. Veda Trend Hunter on XAUUSD is genuinely exceptional."</div>
                <div class="tau">
                    <div class="av">PK</div>
                    <div>
                        <div class="an">Priya K.</div>
                        <div class="al">Singapore · Veda Trend Hunter</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="cta" id="contact">
        <div style="position:relative;z-index:1;">
            <div class="slabel rev" style="justify-content:center;">Get Started Today</div>
            <h2 class="rev" style="text-align:center;max-width:580px;margin:0 auto 18px;">Ready to Trade <em>Algorithmically?</em></h2>
            <p class="rev" style="text-align:center;color:var(--mut);font-size:14px;max-width:460px;margin:0 auto 36px;line-height:1.7;">Book a free 30-minute strategy consultation with one of our Dubai-based quant advisors. No commitment required.</p>
            <div style="display:flex;gap:14px;justify-content:center;flex-wrap:wrap;" class="rev">
                <button class="btn btn-g" onclick="openModal('Free Consultation')">Book Free Consultation</button>
                <a href="https://wa.me/971000000000" class="btn btn-o" target="_blank">💬 WhatsApp Us</a>
            </div>
            <form id="consultationForm">
                @csrf
                <div class="rev" style="display:flex;justify-content:center;gap:36px;margin-top:44px;flex-wrap:wrap;">
                    <div style="text-align:center;">
                        <div style="font-size:10px;letter-spacing:2px;color:var(--mut);">📧 EMAIL</div>
                        <div style="font-size:13px;color:var(--gold);margin-top:3px;">info@vednova.ae</div>
                    </div>
                    <div style="text-align:center;">
                        <div style="font-size:10px;letter-spacing:2px;color:var(--mut);">📱 WHATSAPP</div>
                        <div style="font-size:13px;color:var(--gold);margin-top:3px;">+971 50 000 0000</div>
                    </div>
                    <div style="text-align:center;">
                        <div style="font-size:10px;letter-spacing:2px;color:var(--mut);">🏢 OFFICE</div>
                        <div style="font-size:13px;color:var(--gold);margin-top:3px;">DIFC, Dubai, UAE</div>
                    </div>
                    <div style="text-align:center;">
                        <div style="font-size:10px;letter-spacing:2px;color:var(--mut);">⏰ HOURS</div>
                        <div style="font-size:13px;color:var(--gold);margin-top:3px;">Mon–Fri 9AM–6PM GST</div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <div class="fg">
            <div>
                <a href="#" class="logo">
                    <div class="gem">V</div>
                    <div><span class="lname">VedNova</span><span class="lsub">Consultancy · Dubai</span></div>
                </a>
                <p class="fdesc">Dubai's premier quantitative trading consultancy. Institutional-grade MT5 EAs, premium signals and managed investment plans.</p>
                <div class="fsoc">
                    <a class="soc" href="#" title="Telegram">✈</a>
                    <a class="soc" href="#" title="WhatsApp">📱</a>
                    <a class="soc" href="#" title="LinkedIn">in</a>
                    <a class="soc" href="#" title="X">𝕏</a>
                    <a class="soc" href="#" title="YouTube">▶</a>
                </div>
            </div>
            <div>
                <h4>Products</h4>
                <ul>
                    <li><a href="#bots">Veda Trend Hunter</a></li>
                    <li><a href="#bots">SKS Magic XAUUSD 7</a></li>
                    <li><a href="#bots">SKS XAUUSD Magic V2</a></li>
                    <li><a href="#bots">SKS Autotrader V2</a></li>
                    <li><a href="#bots">Apex Bundle</a></li>
                </ul>
            </div>
            <div>
                <h4>Services</h4>
                <ul>
                    <li><a href="#signals">Forex Signals</a></li>
                    <li><a href="#invest">Investment Plans</a></li>
                    <li><a href="#about">Custom EA Dev</a></li>
                    <li><a href="#contact">Consultancy</a></li>
                    <li><a href="#backtest">Backtest Reports</a></li>
                </ul>
            </div>
            <div>
                <h4>Company</h4>
                <ul>
                    <li><a href="#about">About VedNova</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Risk Disclosure</a></li>
                    <li><a href="#contact">Contact Us</a></li>
                </ul>
            </div>
        </div>
        <div class="fbot">
            <div class="fcopy">© 2025 VedNova Consultancy FZCO · Dubai Silicon Oasis, Dubai, United Arab Emirates</div>
            <div class="fdub">◆ Made in Dubai</div>
            <div class="fleg"><a href="#">Risk Disclosure</a><a href="#">Privacy</a><a href="#">Terms</a></div>
        </div>
        <div style="margin-top:14px;padding-top:14px;border-top:1px solid rgba(201,168,76,0.05);font-size:10px;color:rgba(138,132,116,0.4);line-height:1.6;text-align:center;">RISK WARNING: Trading forex and CFDs carries a high level of risk. Past performance is not indicative of future results. VedNova Consultancy LLC does not provide investment advice.</div>
    </footer>

    <!-- MODAL -->
    <div class="ovl" id="ovl" onclick="closeOut(event)">
        <div class="modal">
            <button class="mclose" onclick="closeModal()">✕</button>
            <div class="mtit" id="mtit">Enquiry</div>
            <div class="msub">Fill in your details and our Dubai team will contact you within 2 hours.</div>
            <div class="frow">
                <div class="fg2"><label>First Name</label><input type="text" placeholder="Ahmed" /></div>
                <div class="fg2"><label>Last Name</label><input type="text" placeholder="Al Rashid" /></div>
            </div>
            <div class="fg2"><label>Email Address</label><input type="email" placeholder="info@vednovaconsultancy.com" /></div>
            <div class="fg2"><label>WhatsApp / Phone</label><input type="tel" placeholder="+971 58 122 3964" /></div>
            <div class="fg2"><label>Country</label><select>
                    <option>United Arab Emirates</option>
                    <option>Saudi Arabia</option>
                    <option>United Kingdom</option>
                    <option>United States</option>
                    <option>India</option>
                    <option>Singapore</option>
                    <option>Other</option>
                </select></div>
            <div class="fg2"><label>Interest</label><select>
                    <option>MT5 Expert Advisor</option>
                    <option>Forex Signals</option>
                    <option>Managed Investment</option>
                    <option>Free Consultation</option>
                </select></div>
            <button class="btn btn-g" style="width:100%;margin-top:6px;" onclick="submitForm()">Submit Enquiry →</button>
            <div style="text-align:center;font-size:10px;color:var(--mut);margin-top:10px;">🔒 Your data is safe and never shared.</div>
        </div>
    </div>

    <script>
        function toggleNav() {
            var ul = document.querySelector('.nav-links');
            if (ul.style.display === 'flex') {
                ul.style.display = 'none';
            } else {
                ul.style.cssText = 'display:flex;flex-direction:column;position:absolute;top:70px;left:0;right:0;background:rgba(5,8,16,0.98);padding:20px 5vw;gap:18px;z-index:999;';
            }
        }

        function openModal(n) {
            document.getElementById('mtit').textContent = n;
            document.getElementById('ovl').classList.add('on');
        }

        function closeModal() {
            document.getElementById('ovl').classList.remove('on');
        }

        function closeOut(e) {
            if (e.target.id === 'ovl') closeModal();
        }

        function submitForm() {
            alert('Thank you! Our Dubai team will reach out within 2 hours.');
            closeModal();

        }
        var revEls = document.querySelectorAll('.rev');
        var ro = new IntersectionObserver(function(entries) {
            entries.forEach(function(e) {
                if (e.isIntersecting) e.target.classList.add('on');
            });
        }, {
            threshold: 0.1
        });
        revEls.forEach(function(el) {
            ro.observe(el);
        });

        function animCount(el) {
            var target = parseInt(el.dataset.target);
            var dur = 2000;
            var start = performance.now();

            function tick(now) {
                var p = Math.min((now - start) / dur, 1);
                var ease = 1 - Math.pow(1 - p, 3);
                el.textContent = Math.floor(ease * target).toLocaleString();
                if (p < 1) requestAnimationFrame(tick);
            }
            requestAnimationFrame(tick);
        }
        var cEls = document.querySelectorAll('.counter');
        var co = new IntersectionObserver(function(entries) {
            entries.forEach(function(e) {
                if (e.isIntersecting) {
                    animCount(e.target);
                    co.unobserve(e.target);
                }
            });
        }, {
            threshold: 0.5
        });
        cEls.forEach(function(el) {
            co.observe(el);
        });
        window.addEventListener('scroll', function() {
            document.getElementById('navbar').style.boxShadow = scrollY > 40 ? '0 4px 36px rgba(0,0,0,0.5)' : 'none';
        });
    </script>
    <script src="https://c.mql5.com/js/widgets/quotes/widget.js?v=3"></script>
    <script>
        new QuotesWidget({
            type: "ticker",
            filter: ["EURUSD", "USDJPY", "GBPUSD", "AUDUSD", "USDCAD", "XAUUSD", "US30", "NAS100"],
            width: "100%",
            height: 50,
            id: "quotesWidgetTicker",
            fw: "html"
        });
    </script>
</body>

</html>
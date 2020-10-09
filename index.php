<html>
    <head>
        <title>Engage SVG</title>
        <link rel="stylesheet" type="text/css" href="css/styles.css">
    </head>
    <body>
        <div class="wrapper">
            <div class="header">
            <a href="https://github.com/punthecake/EngageSVG">GITHUB</a>
            </div>
            <h1>Basic SVG Elements</h1>
            <div class="content">
            <div class="task1">
                <svg width="200" height="300" fill="#DAE0FF">
                    <rect fill="#eb412a" height="300" width="200"/>
                      <g>
                        <line x1="10" y1="150" x2="190" y2="150" stroke-width="5" stroke="#828699"/>
                      </g>
                      <g>
                         <circle cx="100" cy="75" r="15" fill="#e8e897" stroke="null"/>
                        <circle cx="25" cy="25" r="15" fill="#e8e897" stroke="null"/>
                        <circle cx="175" cy="25" r="15" fill="#e8e897" stroke="null"/>
                        <circle cx="25" cy="125" r="15" fill="#e8e897" stroke="null"/>
                        <circle cx="175" cy="125" r="15" fill="#e8e897" stroke="null"/>
                      </g>
                      <g>
                        <circle cx="25" cy="175" r="15" fill="#e8e897" stroke="null"/>
                        <circle cx="25" cy="225" r="15" fill="#e8e897" stroke="null"/>
                        <circle cx="25" cy="275" r="15" fill="#e8e897" stroke="null"/>
                        <circle cx="175" cy="175" r="15" fill="#e8e897" stroke="null"/>
                        <circle cx="175" cy="225" r="15" fill="#e8e897" stroke="null"/>
                        <circle cx="175" cy="275" r="15" fill="#e8e897" stroke="null"/>
                      </g>
                  </svg>
                  <p>1. Line and Circle</p>
            </div>
            <div class="task2">
                <svg height="300" width="200">
                    <rect fill="#e3e168" height="300" width="200" />
                    <g>
                      <rect x="25" y="25" width="150" height="250" fill="#5cedd5"/>
                      <rect x="50" y="50" width="100" height="200" fill="#5cb5ed"/>
                      <rect x="75" y="75" width="50" height="150" fill="#635ced"/>
                    </g>
                    <g>
                      <circle cx="100" cy="13" r="10" fill="#f54049" stroke="null"/>
                      <circle cx="100" cy="288" r="10" fill="#f54049" stroke="null"/>
                      <circle cx="13" cy="150" r="10" fill="#f54049" stroke="null"/>
                      <circle cx="188" cy="150" r="10" fill="#f54049" stroke="null"/>
                    </g>
                    <g>
                    <circle cx="100" cy="38" r="8" fill="#f54049" stroke="null"/>
                      <circle cx="100" cy="263" r="8" fill="#f54049" stroke="null"/>
                      <circle cx="38" cy="150" r="8" fill="#f54049" stroke="null"/>
                      <circle cx="163" cy="150" r="8" fill="#f54049" stroke="null"/>
                    </g>
                    <g>
                    <circle cx="100" cy="63" r="6" fill="#f54049" stroke="null"/>
                      <circle cx="100" cy="238" r="6" fill="#f54049" stroke="null"/>
                      <circle cx="63" cy="150" r="6" fill="#f54049" stroke="null"/>
                      <circle cx="138" cy="150" r="6" fill="#f54049"         stroke="null"/>
                    </g>
                    <g>
                      <circle cx="100" cy="100" r="20" fill="#f54049" stroke="null"/>
                      <circle cx="100" cy="200" r="20" fill="#f54049" stroke="null"/>
                        <circle cx="100" cy="150" r="20" fill="#f54049" stroke="null"/>
                     </g>
                  </svg>
                  <p>2. Circle and Rectangle</p>
            </div>
            <div class="task3">
                <svg height="300" width="200">
                    <rect fill="#18edbb" height="300" width="200" />
                    <g>
                      <polyline points="0,0  100,150 0,300"
                    style="fill:#18edb1;stroke:#d62f2f; stroke-width:15" />
                      <polyline points="-5,15 85,150 -5,285"
                    style="fill:white;stroke:#fffea6; stroke-width:15" />
                    </g>
                    <g>
                      <polyline points="200,0  105,150 200,300"
                    style="fill:#18edb1;stroke:#d62f2f; stroke-width:15" />
                      <polyline points="205,15 120,150 205,280"
                    style="fill:white;stroke:#fffea6; stroke-width:15" />
                    </g>
                    <polyline points="15,-5 102,126 185,-5"
                    style="fill:#18edb1;stroke:#fffea6; stroke-width:15" />
                    <polyline points="15,305 102,174 185,305"
                    style="fill:#18edb1;stroke:#fffea6; stroke-width:15" />
                    <g>
                    </g>
                    <g>
                      <circle cx="100" cy="25" r="15" fill="#ff2474"/>
                      <circle cx="100" cy="275" r="15" fill="#ff2474"/>
                      <circle cx="25" cy="150" r="15" fill="#ff2474"/>
                      <circle cx="175" cy="150" r="15" fill="#ff2474"/>
                    </g>
                  </svg>
                  <p>3. Polyline and Circle</p>
            </div>
            <div class="task4">
                <svg height="300" width="200">
                    <rect fill="#227494" height="300" width="200"/>
                    <g>
                      <ellipse cy="150" cx="100" rx="80" ry="130" fill="#fcf1d2"   stroke-width="1" stroke="null"/>
                    </g>
                    <g transform="translate(0,50)">
                      <polygon points="20,85 95,85, 65,50" fill="black" stroke-width="2" stroke="null"/>
                      <polygon points="105,85 180,85, 145,50" fill="black" stroke-width="2" stroke="null"/>
                      <polygon points="70,50 135,50 100,80" fill="black" stroke-width="2" stroke="null"/>
                      <polygon points="20,90 95,90 95,180" fill="black" stroke-width="2" stroke="null"/>
                      <polygon points="105,90 180,90 105,180" fill="black" stroke-width="2" stroke="null"/>
                    </g>
                  </svg>
                  <p>4. Polygon and Ellipse</p>
            </div>
            <div class="task5">
                <svg height="300" width="200">
                    <rect height="300" width="200" fill="#709fb0"/>
                    <g>
                      <rect x="25" y="75" height="100" width="150" fill="#30475e"/>
                       <line x1="30" y1="80" x2="150" y2="30" stroke-width="10" stroke="#30475e"/>
                     </g>
                     <g>
                       <circle cx="60" cy="140" r="20" fill="white"/>
                       <circle cx="60" cy="140" r="10" fill="#30475e"/>
                       <circle cx="140" cy="140" r="20" fill="white"/>
                       <circle cx="140" cy="140" r="10" fill="#30475e"/>
                       <rect x="50" y="95" height="15" width="100" fill="white"/>
                       <line x1="50" y1="100" x2="150" y2="100" stroke="black" stroke-width="2"/>
                     </g>
                  </svg>
                  <p>5. Circle, Line and Rectangle</p>
            </div>
            <div class="task6">
                <svg height="300" width="200">
                    <rect height="300" width="200" fill="#F69E7B"/>
                    <g>
                     <polyline points="-5,50 50,10 100,50 150,10 205,50" style="fill:#F69E7B;stroke:#383e56;stroke-width:10" />
                       <polyline points="-5,70 50,30 100,70 150,30 205,70" style="fill:#F69E7B;stroke:#8bcdcd;stroke-width:10" />
                         <polyline points="-5,90 50,50 100,90 150,50 205,90" style="fill:#F69E7B;stroke:#383e56;stroke-width:10" />
                           <polyline points="-5,110 50,70 100,110 150,70 205,110" style="fill:#F69E7B;stroke:#8bcdcd;stroke-width:10" />
                     <polyline points="-5,250 50,290 100,250 150,290 205,250" style="fill:#F69E7B;stroke:#383e56;stroke-width:10" />
                       <polyline points="-5,230 50,270 100,230 150,270 205,230" style="fill:#F69E7B;stroke:#8bcdcd;stroke-width:10" />
                         <polyline points="-5,210 50,250 100,210 150,250 205,210" style="fill:#F69E7B;stroke:#383e56;stroke-width:10" />
                    <polyline points="-5,190 50,230 100,190 150,230 205,190" style="fill:#F69E7B;stroke:#8bcdcd;stroke-width:10" />
                    </g>
                    <g>
                      <polygon points="-5,150 100,150 50,200" fill="#8bcdcd" stroke-width="2" stroke="null"/>
                      <polygon points="100,150 205,150 150,100" fill="#383e56" stroke-width="2" stroke="null"/>
                    </g>
                  </svg>
                  <p>5. Polyline and Polygon</p>
            </div>
            <div class="task7">
                <svg height="300" width="200">
                    <rect height="300" width="200" fill="#2c0452"/>
                      <g>
                       <polygon points="10,45 190,45 100,150" fill="#2c0452" stroke-width="2" stroke="#ff124f"/>
                    </g>
                    <g>
                      <circle cx="100" cy="80" r="50" fill="#ff00a0" stroke="null"/>
                    </g>
                    <g>
                      <rect y="180" height="130" width="200" fill="#7a04eb"/>
                      <polyline points="10,180 40,160 70,180 100,160 130,180 160,160 190,180" style="fill:#2c0452;stroke:#7a04eb;stroke-width:5"/>
                      <line x1="50" y1="80" x2="150" y2="80" stroke-width="3"       stroke="#2c0452"/>
                      <line x1="50" y1="90" x2="150" y2="90" stroke-width="4"    stroke="#2c0452"/>
                       <line x1="50" y1="100" x2="150" y2="100" stroke-width="5"   stroke="#2c0452"/>
                       <line x1="50" y1="110" x2="150" y2="110" stroke-width="6" stroke="#2c0452"/>
                       <line x1="50" y1="120" x2="150" y2="120" stroke-width="7" stroke="#2c0452"/>
                    </g>
                    <g>
                    <ellipse cx="25" cy="160" rx="10" ry="5" fill="#dcd5d5" stroke="null"/>
                      <ellipse cx="55" cy="160" rx="10" ry="5" fill="#dcd5d5" stroke="null"/>
                        <ellipse cx="85" cy="160" rx="10" ry="5" fill="#dcd5d5" stroke="null"/>
                    <ellipse cx="115" cy="160" rx="10" ry="5" fill="#dcd5d5" stroke="null"/>
                    <ellipse cx="145" cy="160" rx="10" ry="5" fill="#dcd5d5" stroke="null"/>
                    <ellipse cx="175" cy="160" rx="10" ry="5" fill="#dcd5d5" stroke="null"/>
                   <ellipse cx="40" cy="150" rx="13" ry="5" fill="#dcd5d5" stroke="null"/>
                      <ellipse cx="100" cy="150" rx="13" ry="5" fill="#dcd5d5" stroke="null"/>
                      <ellipse cx="160" cy="150" rx="13" ry="5" fill="#dcd5d5" stroke="null"/>
                    </g>
                    <g>
                    </g>
                  </svg>
                  <p>7. Circle, Rectangle, Polyline, <br>Polygon and Ellipse</p>
            </div>
            </div>
            <div class="footer">
                <p>Jubelag, Francisco XV © 2020</p>
            </div>
        </div>
    </body>
</html>

<?php
$date = date("l, F j, Y");
$time = date("h:i A");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TEAM BONI</title>
    <style>
        body {
            margin: 0;
            padding: 40px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #2c3e50;
            line-height: 1.6;
            background: linear-gradient(135deg, #f4f7f9, #e8eef4, #dce3eb);
            background-attachment: fixed;
        }
        h1 {
            text-align: center;
            font-size: 2.8em;
            margin-bottom: 20px;
            color: #1a237e; /* Deep navy */
            letter-spacing: 2px;
            text-transform: uppercase;
            position: relative;
            display: inline-block;
            padding-bottom: 12px;
            border-bottom: 4px solid #3949ab;
            animation: fadeIn 1s ease-out;
        }
        .datetime {
            text-align: center;
            font-size: 1em;
            color: #555;
            margin-bottom: 12px;
        }
        .greeting {
            text-align: center;
            font-size: 1.2em;
            margin-bottom: 25px;
            font-weight: bold;
            color: #283593;
        }
        .container {
            display: flex;
            flex-direction: column; 
            gap: 25px;
            max-width: 700px;
            margin: 0 auto;
        }
        .member {
            display: flex;
            flex-direction: column;
            align-items: center;
            background: #ffffff;
            border: 1px solid #cfd8dc;
            border-radius: 16px;
            box-shadow: 0 6px 18px rgba(0,0,0,0.08);
            padding: 25px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            animation: fadeInUp 0.8s ease forwards;
            opacity: 0;
        }
        .member:hover {
            transform: scale(1.04);
            box-shadow: 0 10px 25px rgba(25, 118, 210, 0.3);
            border-color: #1e88e5;
        }
        .member img {
            width: 140px;
            height: 140px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 15px;
            border: 4px solid #1e88e5;
            transition: transform 0.3s ease;
        }
        .member img:hover {
            transform: rotate(-2deg) scale(1.05);
        }
        .member-info {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 6px;
            text-align: center;
        }
        .member-info h2 {
            font-size: 1.4em;
            margin-bottom: 10px;
            color: #1a237e;
        }
        .info {
            font-size: 0.95em;
            color: #444;
            margin: 0;
        }
        .label {
            font-weight: 600;
            color: #1565c0;
            margin-right: 6px;
        }
        a { 
            color: #1565c0; 
            text-decoration: none; 
            font-weight: 500;
        }
        a:hover { 
            text-decoration: underline; 
            color: #0d47a1;
        }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: scale(0.95); }
            to { opacity: 1; transform: scale(1); }
        }
        /* Scroll to top button */
        #toTop {
            display: none;
            position: fixed;
            bottom: 25px;
            right: 25px;
            padding: 12px 18px;
            font-size: 15px;
            border: none;
            border-radius: 50%;
            background: #1a237e;
            color: white;
            cursor: pointer;
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
            transition: background 0.3s, transform 0.3s;
        }
        #toTop:hover { 
            background: #283593; 
            transform: scale(1.1);
        }
        /* Footer */
        footer {
            text-align: center;
            margin-top: 40px;
            padding: 15px;
            font-size: 0.9em;
            color: #555;
            border-top: 1px solid #cfd8dc;
        }
    </style>
</head>
<body>

    <h1>TEAM BONI</h1>
    <p class="datetime">Today is <strong><?php echo $date; ?></strong> | Current Time: <span id="time"><?php echo $time; ?></span></p>
    <p class="greeting" id="greeting"></p>

    <div class="container">
        <div class="member">
            <img src="images/alfonso.jpg" alt="Alfonso Miguel Gutierrez">
            <div class="member-info">
                <h2>Alfonso Miguel Gutierrez</h2>
                <p class="info"><span class="label">Age:</span> 23</p>
                <p class="info"><span class="label">Email:</span>
				    <a href="mailto:gutierrezalfonsomiguel_bsit@plmun.edu.ph">gutierrezalfonsomiguel_bsit@plmun.edu.ph</a>
				</p>
                <p class="info"><span class="label">Github Account:</span>
				    <a href="https://github.com/AlfonsoGutierrez21" target="_blank">Github.com/AlfonsoGutierrez21</a>
				</p>
				<p class="info"><span class="label">Contact No:</span>
				    <a href="tel:+6399512990348">+63 9512990348</a>
				</p>
				<p class="info"><span class="label">Facebook Account:</span>
				    <a href="https://www.facebook.com/AlfonsoGutierrez21" target="_blank">Facebook.com/AlfonsoGutierrez21</a>
				</p>
			</div>
        </div>
		
	    <div class="member">
            <img src="images/joseph1.jpg" alt="Joseph Ryan Ramos">
            <div class="member-info"> 
                <h2>Joseph Ryan Ramos</h2>
                <p class="info"><span class="label">Age:</span> 23</p>
                <p class="info"><span class="label">Email:</span>
                    <a href="mailto:ramosjosephryan_bsit@plmun.edu.ph">ramosjosephryan_bsit@plmun.edu.ph</a>
                </p>
                <p class="info"><span class="label">Github Account:</span> 
                    <a href="https://github.com/josephryanramos" target="_blank">Github.com/josephryanramos</a>
                </p>
                <p class="info"><span class="label">Contact No:</span> 
                    <a href="tel:+63970230941">+63 970230941</a>
                </p>
                <p class="info"><span class="label">Facebook Account:</span> 
                    <a href="https://www.facebook.com/ChoconaLatte" target="_blank">Facebook.com/ChoconaLatte</a>
                </p>
            </div>
        </div>
		
        <div class="member">
            <img src="images/romar.png" alt="Romar Antonio">
            <div class="member-info">
                <h2>Romar Antonio</h2>
                <p class="info"><span class="label">Age:</span> 25</p>
                <p class="info"><span class="label">Email:</span> 
                    <a href="mailto:antonioromar_bsit@plmun.edu.ph">antonioromar_bsit@plmun.edu.ph</a>
                </p>
                <p class="info"><span class="label">Github Account:</span> 
                    <a href="https://github.com/bonbonitoo" target="_blank">Github.com/bonbonitoo</a>
                </p>
                <p class="info"><span class="label">Contact No:</span> 
                    <a href="tel:+639919150143">+63 9919150143</a>
                </p>
                <p class="info"><span class="label">Facebook Account:</span> 
                    <a href="https://www.facebook.com/bonbonitoo" target="_blank">Facebook.com/bonbonitoo</a>
                </p>
            </div>
        </div>
		
        <div class="member">
            <img src="images/vincent.jpg" alt="Vincent Ban Baylon">
            <div class="member-info">
                <h2>Vincent Ban Baylon</h2>
                <p class="info"><span class="label">Age:</span> 20</p>
                <p class="info"><span class="label">Email:</span> 
                    <a href="mailto:baylonvincentban_bsit@plmun.edu.ph">baylonvincentban_bsit@plmun.edu.ph</a>
                </p>
                <p class="info"><span class="label">Github Account:</span> 
                    <a href="https://github.com/Vincentban15" target="_blank">Github.com/Vincentban15</a>
                </p>
                <p class="info"><span class="label">Contact No:</span> 
                    <a href="tel:+639603109120">+63 9603109120</a>
                </p>
                <p class="info"><span class="label">Facebook Account:</span> 
                    <a href="https://www.facebook.com/vbdb.ban05" target="_blank">Facebook.com/vbdb.ban05</a>
                </p>
            </div>
        </div>
    </div>

    <button id="toTop">↑</button>

    <footer>
        © <?php echo date("Y"); ?> TEAM BONI. All Rights Reserved.
    </footer>

    <script>
	
        function updateTime() {
            const now = new Date();
            const options = { hour: '2-digit', minute: '2-digit', second: '2-digit' };
            document.getElementById('time').innerText = now.toLocaleTimeString([], options);
        }
        setInterval(updateTime, 1000);
        updateTime();

        document.getElementById('greeting').innerText = "Welcome to Team BONI’s Official Page!";

        const toTop = document.getElementById('toTop');
        window.onscroll = function () {
            if (document.documentElement.scrollTop > 100) {
                toTop.style.display = "block";
            } else {
                toTop.style.display = "none";
            }
        };
        toTop.onclick = () => window.scrollTo({ top: 0, behavior: 'smooth' });
    </script>

</body>
</html>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewpoint"content="width=device-width,initial-scale=1.0">
	<meta name="description"content="Learn Interact Build">
	<meta name="keywords"content="technology information computer science coding acquire skills and confidence">
	<meta name="author"content="Celine Bowen">
	<title>Tech club|Welcome</title>
	<link rel="stylesheet" href="style.css"/>
</head>
<body>
	<body style="background:url(https://images.unsplash.com/photo-1504164996022-09080787b6b3?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=60);background-size:100% 100%;
	-webkit-background-size: cover;
	-moz-background-size:cover;
	-o-background-size:cover;
	background-size:cover;">
	<?php
include ('includes/nav.php');
	?>
	<?php 
  	if (isset($_SESSION['success'])) : 
  	?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php
  	 endif 
  	 ?>
<center>
    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Logged in with: <strong><?php echo $_SESSION['username']; ?></strong></p>
    	
    <?php endif ?>
	<section id="showcase" >
       
		<div class="container">
	
			<h1>Learn Create Achieve</h1>
		<p> Be part of us as we keep up with technology and participate in its diversity and growth</p>
	</section>
	<section id="newsletter">
	<div class="container">
    <h1>Subscribe to our updates</h1>
    <form>
    	<label><a href="registration.php"></a></label><br>
	
    	<input type="email" placeholder="Enter email..." >
    	<button type="submit"class="button_1">Subscribe</button>
    </form>		
	</div>
</section>
	<footer id="boxes">
		<div  class="container">
			<img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIAIAAgQMBEQACEQEDEQH/xAAcAAABBQEBAQAAAAAAAAAAAAAAAwQFBgcBAgj/xAA+EAABAwMCBAQEAwUGBwEAAAABAgMEAAURBiESEzFBB1FhcRQiMoFCkaEVI1LB0RYkM2JysSU0Q0SS0vEX/8QAGgEBAAMBAQEAAAAAAAAAAAAAAAMEBQECBv/EADMRAAICAgECAwYEBgMBAAAAAAABAgMEESESMQUTQSJRYXGB8DJCodEGFBUjscEzUpEk/9oADAMBAAIRAxEAPwDcaAKAKAKAKADtQFE1Pr9iy6oh20JSuOkj45zu3xfSB6j6j6Vdpw5W1Of/AIVbclQsUS8IWlaApJBSRkEdCKpeui0uSva01XE0zA414dmOj+7x84Kj5nySPP7VYx8eV8tLsQ3XKqO33EvD7Up1JZQ7IKRNYVy5CUjAz2UB5EfrmmVR5Nml2OY93mw36lpquThQBQBQBQBQBQBQBQBQBQBQCEuVHhsLflvNssoGVOOKCUgepNdScnpdzjaS2zJdb6ZsLkdN7tt3LKpzx5aHkqcS+sncpP1Aeu4rVxsm1f25R3r9DPvpra60+5XBc57eonDCuEiIxBBZC0L+hhr5eh2JPYHYqVVny4OpbW2/8sg8yXXw+ENLpqW53Sa7JkvIWHDsy60hxCU9gAoGpK8auEdJfUjndKb2zSfDK721m0PLmRrdbJKQVqW2AgvMg4Dis7gBRI6427Vl5tc/M0m2v9+40MacOnnhmhMvNvNpcZcStChlKknIPsaoPjhltPfYUodCgCgCgCgCgCgCgCgDNAVG6avxqmJpy1pQ5JccHxLyt0spxxKAHdXCD6DI69KtQxm6nbLsV53/ANxVx7mb6husnW+sY8BtSzAMoNMNo6BGcKcPrjJz2FaVVaxqHN99FGybvt6fQtd30deb3q1mUrkRLTBW0iMhR4iW0EHZI23OeuNseVVK8quulxXMmWJ0TnZt9kdt3hWyy/J+OuzkiO+goUhDPLV9QUDxcR3BSD07VyfiEml0rTR2OGk3tjqL4U2JiSl16RNkNg55Li0hKvfABrkvEbmtLSOxwq099yEm6LvNl1Q1dIKf2lCLoDiUgBYaI4VIKOhARsMdgNhU0cqudLhLh/7I5Y842KS5RD2i7yNCaxk24uLNsTKKHWlHYIP0rHkQCD6gVNOpZVCn+YihY6LXH0NLhauZOqJWnp6EsyUKBjOpPyPpKQoD0Vg9O+PtWZLHl5Stj2LyvXX0MtFVycKAKAKAKAKAKAD0oCrTtVIb1fHsMZKVKS0t2Ss/hwgqSgevQk/12sRx26fNZBK7+50Izjwyt069aneuiioNNpdU+/jqtxJGB6/Nn7etaWbOFdSr9eCjixlOxzNEstpsmk1mJa4zj09bSlqUr5nFgDOCroAcdB3rLvyJ3P2mWo+VQ+iK5C4XiU+hTcZRbWI5kDl781sLRgpOCd0lQIxkHz2zX2Q25E5JqPHG/psdqXIVBgvMtyHuS6eYgcQUocCgD8+Cdynr5V0lbk4RcdvX36kYWr1CWh3lvrQG0JUlKuLBbZyDt/EslJ9hXnlFdrIg9+n7L/bHQvUqGZLSv7wYrqW1qXkcSihOEggeZKicHAFNkiyJw2nzp/sI3yy2PVyWWp4THuKmuNpbTiS5wZO4IyFJO5H8qtUZM6X7L+hJLyr9KXEjPvEy2zbNebfM4ytKYzKGpOMFTjQ7+R2zWpgzjZW4/P8AUrZcJQmpGkwNWNO6hZs8hAQuVDbkx15+oqTkoPrsSPv5b5ksdqt2LsnovK1dag/cWgVXJwoAoAoAoAoCH1HfY9jbiKfAUuVJbjoTnH1K3PsBk1LVTKxvXotkdlihrfqZVakS3vFx3gBK0znS7ns3uD+mB+VatjisJfIzoKTyWaU9Liacai2+3QUJY6BCCR3GQkAEqXvk+gyTWNOyUpblyy1bcqdRivv9zzZ4MqSgKdlqVFaf4o5WklwYOyuJW+CCQQQe+9eER0Vzly3wnx7yaxFgM7lDLYJIJOwJOT+tJTjBbk9F+Fb7RRn+tfEh61XN222ZhlbjBw889kgK/hCQR0881p4uCrY9c3wUb8twfTEcaG8RFXmX+z7uw2zJKFKadZzwuYGSMHocAnqc15y8PyI+YnwesbJdsuhrkuS0wbwyhSHEuBCuJDjayFNqxjII3BwT+dZcLK7VuL2XLsd9rFohLtAXbpK5qC46XPmSskq4HsL4VqSBgjHAgbeWa9tepnW1OqXWvt88/wChwj4O921VrvARJDqiglQwFKGSEgj8aQN8dCDUldkoSUovTJq5xsj0T5+/8r1My1WJMPxNjJQko5T0VEbHdscIH68X61s4/TLEf12VbtrIX0Nes94jXV2c1HP7yFJXHdT5Ed/Y/wAjWPOt1pb9TShNT3r0JOvB7CgCgCgCgMo8buNa7O6hRLSecniSfpXlH67H8jWt4Zr2k/gZ2dv2WWDTfIj2b+1S4oVcrky1zlE4T2TnOPlSccRP9Ko5MnGXlb4iyVSUK/N1yx5ZoMiU0y4paFwHjzcqVlWQonbbBJUeLmbHAAwOtVY+8iorlNJ/lfP3+5G33xOtdrnuRI8Z+atpRS442oJQD3AJ61oVYFlkdt6JrMyEH09yLRdmr63+1Yslx9LTiQ608MLYPUAgbcJxsR618t4v4ffi2Kyb6ls+j8Lzacit1RXS9FJ1xbXoV6kzilSoU11TzL/4TxHJST2UDkY9K+38Pyq8iiLi/Q+SzMadNzUkONAW99V1bvKkFMKHxKLp2DiykhKE+Zyd/QVD4vl10Y0lJ8sk8Nxp3ZEdItjUlNuZcuT8pcRhjALiBlSlHolI7k7+mOtfCeGYV+Vb/aetep9l4ll049WrFseQPFa1PyEx5sOUwyo8PxCilQx5qA6fbNfaS8NtjHumz5JZtcpaa0WO4xW0NNrhx3JjhCVQkNpHKjpGMKTuB69cnp0rPa0ctrSXsrb9PgNtVW6M9FY1I/FcE20trfQ2vAK8JJCVYyMcWFbeXrVnHslvyl2kSWRTj5jXKKh4LvPu3e8POrKg42hbij3WVHf33NXvEklCCRWwm3KTZrYrJNI7QBQBQHDQGJWyW3fjcdK3p0svPz1vQpChnlPlRyg+h3/M1tTi6lG6v0XJlRkrG6p+/g065RRAjQW2uZ8DHQGOU0+WlcR4UoIORnyxnvWLKTk+p+pavj0qPuXx18h3AiuRbOptzlsyFoUVqTgDiPQkjqemT3xXNqPLJaa5KHTrk+b32HYrzkeQhSHmlFDiVdUqHXNfVxkpJNdjFkmnplt8PWnUou8kgiN8OlknspwrBSPcAE18/wDxJZCOJ0vubPgUJyyk12LNGlyIoUI7ymwr6kjofcdK+Cqvtp/45aPtLceq78cdnJMp+UoKkvLcKfp4jsn2HauW3WWvc3s7VTXUtQWiF1u047pmI62MtR5a+eB+ErSAlR/IjNfY/wALWQ6JQ9T5b+I4T8yMvQontvX1x8zrZ9BWJidC0RBZGRNZioBBxlHmN9uIJ8+4r5i+SlbJx7bNnU40cd9Hu2PNXBc2E5JU6w6zjkvuoU7vkLOB0TuOveooy09ojpmpuUd8fHuZpeXGtG27+ztukh64uy0vzH0bcCUqBbR7/ST9/OtqtPJk7ZrSS4K82qV5ce+zbEHKQSMHyrGNQ9UAUAUAzvEpcG1TJbbfMWwwtxKM44ilJOP0r1GPVJJnmb6YtmTSbU3etSWrUunsuRJU1lUpsbriO8YKuIeR65/qK1la66pU290nr4mc4Kc42Q95fb5zfiZqkvgcDaC24JRbEUnOCpPQjO+d89NgM1iskv6uqT3+vb5oe6sdLVjdAO61JQT996o+Jyaxnr1Nzw2PVkR2UWSIk5SV3K3RZjqQEh11JC8DoCoEE/es7G8by6IdMZcGlf4PjXS6mtHXHeJptltpphhv6GWUcKE+oHn69apZWZdlS6rHst42JVjR1WhOqpZCgFGHlsFXBwlK0lK0LSFJWk9QoHYipqL7KJ9db0yG+iu+HRYto8MNwIrwkQ7RBYkJOUupQSUHzSCSEn2Falvj2ZZDocjOr8ExYT6tFx0e6X7dKQ7lzDpJCt+LI3/XNWfCbJSqkn6Mq+K1xjYtL0HFtetrtzcRFjvtSWiS4lTZSlBUlOx7DISmtNaMKqVUrGorlGcuWQK1xd71e1ci0wJhdccWP8VWxQhPmen+3etpXf8Azxqr5kyB1/3ZTl2Rq1juAutoiXBLZbEloOBBOSkHtWVZDok4+40IS6oqQ+rwegoAoDw8hLjS21jiSsFJHmDTsca2tGCTIs/QWpGpkV1aoXNy082r5X2wd21dsjcEee9b0ZQy6nF9zJlGVFm12NinswHnlpcfeSJKUcxptZCXQr5U8XvjGxHbNYDWnyXbIwb5ffuOXGY1+tTRVxpZeCXBg4UKhvojfDol2LmLkOGrKyHvFmiw4w+Etq5BwcrS8QpJ88YOazcrCqqr9ivf1NPGzLbJ+3Zr6FS6bHrWB2N5PYUAUAUBYNOwGZfAH7YVoOcyFOlI+ye/2rWwMeFuuuv6/sjJzr51v2bPponzBj2S2znIpIyhSxzF7AgbbntW1RjV0JqHqYuXkztj1T9EMrDHcamNDlQ1RktrLT7DPB/BnJCiDkk/+OamSM7Hi1JcLXPZGWXN66a71W8w06v4Vt1XBxKw3GaBxxnsCQM+pOK34KvFpUmuWVp9d9mvQ3GBGahQY8RgcLTDaW0D0SMD/asOUnJts1opRWkOK4dCgCgOGgMc10zdNLXmW9GCHbPc1l1TD7YcZLh+pKknoc7gjB/KtfFdd8EpcSX/AKZt6nVPa7MstnujGrtNiQhhpubDHJca5POxsOHhBOMEgHJzjB96z8vHdM9HZavr6kuV8NlpsjhbaTDfSlp9CQoMl8OLCT3VgADfOANtqros0PS6Hwxpc7kwXVNuqSgsn5kOD5gc9QNjj1Sc+lZ9+VXtpvt9/bNSrHs0ml3+/tFUnum4T3VRG33yMAhCS4f0Gfz3rJtotybHKuL0a9N1eNWo2SSY1eaejkCSw8xxHA5rakZPpkb1BZhZFa3KPBPXmUWPUZcg0248opYadeUnqGmysj3wNq81Yl1q3CPB6tyqanqcuT180WQ18S26yeIEJcbKCr2ChvXt4t1LUpxejwsmm6LjCS2W6FcGOehxt1BJUEElWVKz+HJGT7JAHrW1TkwbTi/v79xiW49i2mvv7+I81DKSmMtnMkfu+YtURwJdQgH6hnqPPyrSfYyMmS6XHn6dyFk3GJpHTki5vMZdkLw2ggJceUfp4iFKB2ycjt2qbGods+mJDWo49Tlrv98lH0iu4anu8e3xY7MGzRnUyJLUZJSlWDkcajuskgdT642rUyIwog5N7k+336EVLlbLS4RtY6VjGodoAoAoAoCta8auX7FW/a2mpJZ3ehvNcxEhvuOHuRsRjfrVjG6PM1Lj4kF/V0bjyZtpHVlit1yd51nVCjTW+VILckuNAeZQpOQNz0V3O1aOTi2zh+LeilTdWnpx0mbBaYkeHCbbjKC0EcXNyCXM/iJ7n1rG1rgv1VxrjqJHaitTFyejNglD6lfMtHUND6s/ngHsSKrW4dd01OXdfr8C5Vl2UxcI9n+nxHseVa4bQjx34zaEbBttQ2+wq0oP0RWc4+rFVSrfLBjreYdDg4eUsg8Y8sHrRxa7oKSfYaWd6DBtMJouMMEspVwcQBJI3OPU96648tJHFJa5Yu9NtkhpbL78ZaFbKQ4oYPuDRwl7h1xfqRtms8WBdZCk/OfrjeQbPXHqDt7Y86pQwqoWu5Ln/BbnmWTqVT7L9R3IsiHLgicmXIS8hWQFEKHDndIyMgHJH/wVa0Z0sdOant7M319qTTtwnsxVMy5jMAFKUR3UtMqVtn5sE4GMbVr4mPdCO1pbK2RbU3rvouHht8Q7ZzJXAYt0J1WYkVlJ+jutSjuok9/IDzqnl6U9dW36stY23DetIuFVSwFAFAFAFAcPSgM38R7RZ4S03KXYHHWF/wCNKhPctTa/8ycYIP8AFWjh22P2Iz18ylk1wXtOO/kMNM+JFqtMePbDCniC0OFL7zqXFoGehSANh6ZNSXYFk257WzxVlwilHXBZ7pZn9Uy25sS8NsWpbKUpMZsLW7uSTxHZPXsM7VThZGlOMo7ZYlB2valwH/5vp90D44TZqx+ORKWT+mBXr+dt/LpfQ5/K1+om94cWplpQs0qbbXDuOW8VoJ/zIV1HpXf52b/Gk/oHix/K9CcPw7jPNAX24ypyjuWmjyGR7IT/AFo8xr/jil+rOLFX5nscDwz0y380aPJjOdnGZSwofrXP5271e/od/lazkLS0qwXFqbEvJehNZ5zM5IKgjuQ4MdBvuO1cnfGxacefgI0uD2nwROpvEeySWJVsjuTi26gtqmRUJ2Hfh4iM7bZ9anpwbVqb18mRW5db3FbI7w/0/pq6SlPxrbPksx/+vPUgN8X8IQnZR9+le8u6+C02l8jzj1VSe0n9TWEgJSABgCss0DtAFAFAFAFAFAeHEpWkoUkKSoYIPQigKLqvS1mhs/GxdKonb/vER5CmSPIhI2I9vyq7RkWN9MrNfqVLqq0urp2QUDUt3tSUMWjTtstkPiKltPzUkqPnxFQI6eVe7Fjy5st2yusry+Ekl8y5W/WttciJXcnWYkj8TaHecn7KSNx+VZ85Vp+zLaJln4+vakhVWt9Pp/70n2aWf5V48yPvPL8SxV+Y4Nb6fJ/5xX3ZX/SueZH3j+p4v/Y69rSyJZWpiWl1wD5W8FHEfdWwr0pwfdnr+oYz7SKnc9UP3plyDc7HFkQHSMtxbugObbjuM+21XqvJi+qFnPyInl12ey9NfMW0zo7TlzUuQuyTmENnATLkghR9AlW49TXu3Lujwpp/Ikqppnzo0OJGYhx0R4rSGWWxhDaE4Skegqi229supJLSFq4dCgCgCgCgPLjiGkKW4oJSkZKlHAAocbSW2VDUOsmkR3U2GQy/JawpzKCpPBnB4TsCdx9s1HKfHBmZPiMVF+S9tFNVqO93Na0vXZbDSU8a1I+QAZA6J37j7ZqLrk/UyVmZNz056G37InypCxOWo8AypS1lZHl/L7GnS33I1j3Tl7bOC1piyHWZBYWtLYWEKe4BgkgnPmnGcU6dM4sdRk09P6/fY9ptMMpUpd0QeAgKISnABON/m239+voQHSvedWNXrbmcahWrjyudlIxsVAZO2eg6b/ofOiS94VNG+ZHPgbWQv/iGCnoBjCh6f7/p1rmo+8eTQ+0zjUWE3OCUutSmiwpQS4vg+fB4U5B65A7jrRJbORrqVmt7WhZyyJdcC4j6SytSdvqUkHB7e+Py8664b7Hp4kZPcXwN3rHKjp5jZSt1JJ4WzvgdwdiTt0xXOhrseJYlkI7T5Bm93q3OFCLjKbUNylTnEPPocjpTqkjkcrJqeupl40tq7MZP9oZzSHHlHkko4RwjYlRGw3yPtUsJ8e0bWH4huK8+XL7F1bWhxAW2oKSoZCgcgipTWTTW0eqHQoAoBN9pt9pTTzaXEKGFJUMgj2oclFSWmZrq2yQdPXGJKj8QjSVLQ6weiUEYVg+yjtUE4qLTR89m41eLZGcez7og4VkvrctYgRX+YglPMSOFKh0zk7EGvCjLfBTrxchTflol29FaklY+IeQ2M9HZBJH2GRXry5stLw3Ln+J6+o7Z8NJBH725tI9EMFX8xXfJ97JV4LL1n+g9b8NowH7y5PK/0thP9a75K95KvBq/WTFR4b20dZkwn3T/AErvlI9rwan3s6fDi2Y2mTR90/8ArTyoj+jUe9iSvDaER8twkj/UlJp5SPP9Gr9JMaueGriVBTF1TkHKeOP0PuFVzyvcyN+Dae4z/QbuaI1DHc5kWcyshXEMOqSc+fTFc8uS7Eb8MyovcZkFcdPXpmUEyoxLrnQpUk57ZwD0+1eHCSfJStwshT1NcsndK2KDfbjJdkKK40HgZaaGwWACMk+pBOPM1JCKk/kXsTFryLG5do6WjSWWm2GktsoShCRhKUjAA9BUxvpJLSPdDoUAUAUBC3/TsS/OxlTXHQhjiwhsgcWcdT9q8yipdypk4kMhrr9Bxa7DbLUSqBEbacI4VOdVEepO9dSS7ElWPVV+BElXScKAKAKAKAKAKAKAjLrYbZdt58Rt1YHCF9FAe43rjin3ILcaq78cdiNg09FsTkkwnHSh8pJQ4QeHGeh+9cjFR7EeNiQx2+j1JmvRbCgCgP/Z">
		
		</div>
		<p>phone no +254731520585 ,  email address; gmail.com</p>
	
		<p>CUK Tech club , The Co-operative University of Kenya</p>
		
		<p> Copyright &copy;2020</p>
		
	
	</footer>
	</body>
</html>


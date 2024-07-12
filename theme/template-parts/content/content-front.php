<?php
/**
 * Template part for displaying front page
 *
 */
?>

<section class="hero bg-cover bg-center bg-black snap-center relative after:content-[''] after:absolute after:w-full after:h-full after:left-0 after:top-0 after:rounded-br-[50px] after:lg:rounded-br-[100px] overflow-x-hidden z-10"
	style="background-image: url(<?php echo get_template_directory_uri() . '/images/hero-banner.webp'; ?>)">
>
	<div class="container flex justify-end md:justify-center items-center text-center flex-1 flex-col w-full gap-6 min-h-[550px] md:min-h-[800px] lg:min-h-[840px] pb-14 md:pb-0 relative z-20">
		<h1 class="text-4xl md:text-6xl lg:text-8xl font-normal capitalize">
			Focus On What Matters: Hire The Perfect Fit While We Manage
			Recruitment
		</h1>
		<p class="text-base md:text-lg lg:text-xl mb-5">
			Let us handle the complexities of recruitment, so you can focus on
			building your team and achieving your goals.
		</p>
		<a href="#contact_us" class="btn_action font-medium tracking-wide">explore consulting solutions</a>
	</div>
</section>

<section id="our_vision" class="bg-gray-30 py-8 lg:py-12 snap-center OurVision">
	<div class="container">
		<p class="text-green-50 font-semibold uppercase text-center mb-4">
			how it works
		</p>
		<h2 class="font-medium text-[24px] md:text-[32px] lg:text-[44px] leading-[120%] md:leading-[140%] text-black text-center mb-2">
			Expert Recruitment Solutions for Ambitious Businesses
		</h2>
		<p class="text-sm md:text-lg text-center text-neutral-10 mb-6">
			In today's fast-paced business environment, finding and hiring the right talent is crucial for growth and success. At Chronicle, we understand the importance of recruitment for ambitious businesses, which is why we've helped hundreds of high-growth companies achieve hiring success.
		</p>

		<!-- CARDS -->
		<div class="cards">
			<div class="flexBetween flex-col md:flex-row gap-x-20 gap-y-9 md:gap-y-6 py-8 mt-2 md:mt-6">
				<div class="flex-initial md:flex-1 w-full md:w-auto">
					<img 
						alt="Beyond Promises: Guaranteed Faster Hires &amp; Perfect Fits" 
						loading="lazy" width="650" height="280" decoding="async" 
						data-nimg="1" 
						class="rounded-3xl object-cover w-full h-[280px] md:h-[360px] lg:h-[420px] shadow-2xl grayscale" 
						src="https://chroonicle.com/img-card-0.webp"
					/>
				</div>
				<div class="flex-initial md:flex-1 w-full md:w-auto">
					<h4 class="font-semibold text-sm uppercase text-yellow-70 mb-3">employers</h4>
					<h3 class="font-normal text-green-90 text-2xl md:text-3xl lg:text-4xl mb-4">Beyond Promises: Guaranteed Faster Hires &amp; Perfect Fits</h3>
					<p class="text-sm md:text-base mb-8">Are you tired of wasting time and resources on recruitment processes that just don't seem to yield the results you're looking for? You're not alone. Recruitment can be a time-consuming and frustrating process, taking away from the core focus of your business: building your team and achieving your goals.</p>
					<a class="btn_green rounded-full border uppercase font-[600]" href="#contact_us">learn more</a>
				</div>
			</div>
			<div class="flexBetween flex-col md:flex-row-reverse gap-x-20 gap-y-9 md:gap-y-6 py-8 mt-2 md:mt-6">
				<div class="flex-initial md:flex-1 w-full md:w-auto">
					<img 
						alt="Join the Future of Executive Search: Scale Up Your Career at Chronicle" 
						loading="lazy" width="650" height="280" decoding="async" 
						data-nimg="1" 
						class="rounded-3xl object-cover w-full h-[280px] md:h-[360px] lg:h-[420px] shadow-2xl grayscale" 
						src="https://chroonicle.com/img-card-1.webp"
					/>
				</div>
				<div class="flex-initial md:flex-1 w-full md:w-auto">
					<h4 class="font-semibold text-sm uppercase text-yellow-70 mb-3">recruiters</h4>
					<h3 class="font-normal text-green-90 text-2xl md:text-3xl lg:text-4xl mb-4">
						Join the Future of Executive Search: Scale Up Your Career at Chronicle
					</h3>
					<p class="text-sm md:text-base mb-8">
						Leading search professionals are departing top executive search firms to join Candidate Labs, where they are completing more searches, earning higher incomes, and acquiring equity in a venture-backed company.
					</p>
					<a class="btn_green rounded-full border uppercase font-[600]" href="#contact_us">learn more</a>
				</div>
			</div>
			<div class="flexBetween flex-col md:flex-row gap-x-20 gap-y-9 md:gap-y-6 py-8 mt-2 md:mt-6">
				<div class="flex-initial md:flex-1 w-full md:w-auto">
					<img 
						alt="Empower Your Career Journey: Resources for Every Stage" 
						loading="lazy" width="650" height="280" decoding="async" 
						data-nimg="1" 
						class="rounded-3xl object-cover w-full h-[280px] md:h-[360px] lg:h-[420px] shadow-2xl grayscale" 
						src="https://chroonicle.com/img-card-2.webp"
					/>
				</div>
				<div class="flex-initial md:flex-1 w-full md:w-auto">
					<h4 class="font-semibold text-sm uppercase text-yellow-70 mb-3">candidates</h4>
					<h3 class="font-normal text-green-90 text-2xl md:text-3xl lg:text-4xl mb-4">Empower Your Career Journey: Resources for Every Stage</h3>
					<p class="text-sm md:text-base mb-8">Are you crushing it in your current role and looking for ways to advance? Or maybe you're ready for a new challenge and need help navigating the job search. No matter what stage you're at, we've got the resources you need to thrive in your career.</p>
					<a class="btn_green rounded-full border uppercase font-[600]" href="#contact_us">learn more</a>
				</div>
			</div>
		</div>
	</div>
</section>

<section 
	id="how_chronicle_work" 
	class="rounded-tl-[50px] lg:rounded-tl-[100px] rounded-br-[50px] lg:rounded-br-[100px] py-8 lg:py-12 snap-center 
	bg-gray-40 relative before:bg-gray-40 before:content-[''] before:absolute before:w-full 
	before:h-1/4 before:left-0 before:top-0 before:rounded-tl-[50px] before:lg:rounded-tl-[100px] overflow-x-hidden z-30"
	>
	<div class="container relative z-10">
		<h2 class="font-medium text-[24px] md:text-[32px] lg:text-[44px] leading-[120%] md:leading-[140%] text-center text-black mb-14 md:mb-16 lg:mb-20">
			How does the recruitment process look like?
		</h2>
		<div class="grid grid-cols-1 md:grid-cols-2 gap-x-20 gap-y-9 md:gap-y-20 pb-1.5 md:pb-0 relative z-20">
			<div class="flex space-x-4">
				<div class="shrink-0">
					<img 
						alt="Icon" loading="lazy" width="64" height="64" 
						decoding="async" data-nimg="1" class="h-12 w-12" 
						src="https://chroonicle.com/icon-0.svg"
					/>
				</div>
				<div>
					<h3 class="text-xl md:text-2xl font-medium text-green-70 mb-1">The Problem</h3>
					<p class="text-gray-500 text-base">
						Hiring the right talent can be a challenge for any business, but it's especially critical for high-growth companies. You need to move quickly to fill open positions, while also ensuring that your new hires have the skills and expertise to drive your business forward.
					</p>
				</div>
			</div>
			<div class="flex space-x-4">
				<div class="shrink-0">
					<img 
						alt="Icon" loading="lazy" width="64" height="64" 
						decoding="async" data-nimg="1" class="h-12 w-12" 
						src="https://chroonicle.com/icon-1.svg"
					/>
				</div>
				<div>
					<h3 class="text-xl md:text-2xl font-medium text-green-70 mb-1">The Solution</h3>
					<p class="text-gray-500 text-base">
						Chronicle is a trusted partner for high-growth companies looking to streamline their recruitment process. Our expert recruitment team uses cutting-edge technology and innovative strategies to connect you with the best talent in the market.
					</p>
				</div>
			</div>
			<div class="flex space-x-4">
				<div class="shrink-0">
					<img 
						alt="Icon" loading="lazy" width="64" height="64" 
						decoding="async" data-nimg="1" class="h-12 w-12" 
						src="https://chroonicle.com/icon-2.svg"
					/>
				</div>
				<div>
					<h3 class="text-xl md:text-2xl font-medium text-green-70 mb-1">Our Results</h3>
					<p class="text-gray-500 text-base">
						Our results speak for themselves: hundreds of high-growth companies have trusted us with their recruitment needs, achieving remarkable hiring success. For instance, 90% of our clients report a significant reduction in time-to-hire, 85% experience an increase in candidate quality, and 95% see an improvement in overall hiring satisfaction.
					</p>
				</div>
			</div>
			<div class="flex space-x-4">
				<div class="shrink-0">
					<img 
						alt="Icon" loading="lazy" width="64" height="64" 
						decoding="async" data-nimg="1" class="h-12 w-12" 
						src="https://chroonicle.com/icon-4.svg"
					/>
				</div>
				<div>
					<h3 class="text-xl md:text-2xl font-medium text-green-70 mb-1">How We Work</h3>
					<p class="text-gray-500 text-base">
						At Chronicle, we take a personalized approach to recruitment. We work closely with each of our clients to understand their unique needs and goals, and use our expertise to develop tailored recruitment strategies that deliver results.
					</p>
				</div>
			</div>
			<div class="flex space-x-4">
				<div class="shrink-0">
					<img 
						alt="Icon" loading="lazy" width="64" height="64" 
						decoding="async" data-nimg="1" class="h-12 w-12" 
						src="https://chroonicle.com/icon-4.svg"
					/>
				</div>
				<div>
					<h3 class="text-xl md:text-2xl font-medium text-green-70 mb-1">Our Expertise</h3>
					<p class="text-gray-500 text-base">
						Our team of recruitment experts has extensive experience in a wide range of industries, including tech, finance, healthcare, and more. We're dedicated to staying up-to-date with the latest trends and best practices in recruitment, ensuring that our clients receive the best possible service.
					</p>
				</div>
			</div>
			<div class="flex space-x-4">
				<div class="shrink-0">
					<img 
						alt="Icon" loading="lazy" width="64" height="64" 
						decoding="async" data-nimg="1" class="h-12 w-12" 
						src="https://chroonicle.com/icon-5.svg"
					/>
				</div>
				<div>
					<h3 class="text-xl md:text-2xl font-medium text-green-70 mb-1">What Sets Us Apart</h3>
					<p class="text-gray-500 text-base">
						At Chronicle, we're committed to delivering exceptional results for our clients by offering a combination of expertise and innovation. Our expert recruitment team is dedicated to finding the best talent for your business, using cutting-edge technology to streamline the recruitment process, and providing personalized support every step of the way. Don't let recruitment hold your business back. At Chronicle, we're committed to helping high-growth companies achieve hiring success. Contact us today to learn more about how we can help you find the perfect candidate for your team.
					</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="#our_clients" class="clients bg-gray-90 snap-center relative before:content-[''] before:absolute before:w-full before:h-full before:left-0 before:top-[-110px] before:bg-gray-90 before:z-10 z-20">
	<div class="container relative py-8 lg:py-12 z-30">
		<p class="text-yellow-70 font-bold uppercase text-center mb-4">our clients</p>
		<h2 class="font-normal text-[24px] md:text-[32px] lg:text-[44px] leading-[120%] md:leading-[140%] text-yellow-70 text-center">
			Hundreds of High-Growth Companies Achieve Hiring Success with Chronicle
		</h2>

		<div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-6 items-center gap-x-20 gap-y-12 md:gap-y-16 py-8 mt-0 md:mt-6">
			<div>
				<img alt="Clinet-0 Logo" 
				loading="lazy" width="140" height="40" 
				decoding="async" data-nimg="1" src="https://chroonicle.com/clients-0.svg"/>
			</div>
			<div>
				<img alt="Clinet-0 Logo" 
				loading="lazy" width="140" height="40" 
				decoding="async" data-nimg="1" src="https://chroonicle.com/clients-0.svg"/>
			</div>
			<div>
				<img alt="Clinet-0 Logo" 
				loading="lazy" width="140" height="40" 
				decoding="async" data-nimg="1" src="https://chroonicle.com/clients-0.svg"/>
			</div>
			<div>
				<img alt="Clinet-0 Logo" 
				loading="lazy" width="140" height="40" 
				decoding="async" data-nimg="1" src="https://chroonicle.com/clients-0.svg"/>
			</div>
			<div>
				<img alt="Clinet-0 Logo" 
				loading="lazy" width="140" height="40" 
				decoding="async" data-nimg="1" src="https://chroonicle.com/clients-0.svg"/>
			</div>
			<div>
				<img alt="Clinet-0 Logo" 
				loading="lazy" width="140" height="40" 
				decoding="async" data-nimg="1" src="https://chroonicle.com/clients-0.svg"/>
			</div>
			<div>
				<img alt="Clinet-0 Logo" 
				loading="lazy" width="140" height="40" 
				decoding="async" data-nimg="1" src="https://chroonicle.com/clients-0.svg"/>
			</div>
			<div>
				<img alt="Clinet-0 Logo" 
				loading="lazy" width="140" height="40" 
				decoding="async" data-nimg="1" src="https://chroonicle.com/clients-0.svg"/>
			</div>
			<div>
				<img alt="Clinet-0 Logo" 
				loading="lazy" width="140" height="40" 
				decoding="async" data-nimg="1" src="https://chroonicle.com/clients-0.svg"/>
			</div>
			<div>
				<img alt="Clinet-0 Logo" 
				loading="lazy" width="140" height="40" 
				decoding="async" data-nimg="1" src="https://chroonicle.com/clients-0.svg"/>
			</div>
			<div>
				<img alt="Clinet-0 Logo" 
				loading="lazy" width="140" height="40" 
				decoding="async" data-nimg="1" src="https://chroonicle.com/clients-0.svg"/>
			</div>
			<div>
				<img alt="Clinet-0 Logo" 
				loading="lazy" width="140" height="40" 
				decoding="async" data-nimg="1" src="https://chroonicle.com/clients-0.svg"/>
			</div>
		</div>
	</div>
</section>

<section
	id="contact_us" 
	class="bg-green-90 relative snap-center z-30 py-8 lg:py-12"
>
	<div class="absolute w-full h-full left-0 top-0 bg-gray-40 rounded-tl-[50px] lg:rounded-tl-[100px]"></div>
	<div class="container relative z-30">
		<div class="flexBetween flex-col md:flex-row gap-x-12 md:gap-x-20 gap-y-6 bg-white rounded-[50px] py-12 px-6 md:px-12">
			<div class="flex-initial md:flex-1 w-full md:w-auto py-5 lg:py-14">
				<h4 class="font-semibold text-sm uppercase text-yellow-70 mb-3">get in touch</h4>
				<h2 
					class="font-normal text-2xl md:text-3xl lg:text-[44px] leading-[120%] md:leading-[140%] text-green-90 mb-5"
					>
					Ready to take your recruitment strategy to the next level?
				</h2>
				<p class="text-sm md:text-base text-neutral-10">
					Chronicle is here to help. Contact us today to schedule a consultation and take the first step towards building your dream team.
				</p>
			</div>
			<div class="flex-initial md:flex-1 w-full md:w-auto">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</section>
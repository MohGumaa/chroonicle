import React from 'react';
import Title from './Title';
import Button from './Button';

const Contact = () => {
	return (
		<section className="process bg-green-90 relative py-8 lg:py-12 z-30">
			<div className="bg-overlay bg-gray-40 rounded-tl-[50px] lg:rounded-tl-[100px]"></div>
			<div className="max-container padding-container relative z-4">
				<div className="flexBetween gap-x-20 gap-y-6 bg-white rounded-[50px] py-12 px-6 md:px-12">
					<div className="flex-1">
						<h4 className="font-[700] uppercase text-yellow-70 mb-3">
							get in touch
						</h4>
						<Title
							title="Any questions? Write us we will get back to you in 24hrs"
							className="text-green-90 mb-5"
						/>
						<p className="text-base md:text-lg text-neutral-10">
							There's a modern way to hire. Let us show you. Your premier
							destination for finding top talent and securing your dream job
						</p>
					</div>
					<div className="flex-1">
						<form className="flex flex-col items-start w-full">
							<div className="w-full mb-5">
								<input
									id="contact-name"
									type="text"
									name="name"
									className="p-3 text-lg rounded-md w-full border bg-transparent text-black focus:outline-none"
									placeholder="Your Name"
									required
								/>
							</div>
							<div className="w-full mb-5">
								<input
									id="contact-email"
									type="email"
									name="email"
									className="p-3 text-lg rounded-md w-full border bg-transparent text-black focus:outline-none"
									placeholder="Your Email"
									required
								/>
							</div>
							<div className="w-full mb-5">
								<input
									id="contact-phone"
									type="tel"
									name="phone"
									className="p-3 text-lg rounded-md w-full border bg-transparent text-black focus:outline-none"
									placeholder="Your Phone"
									required
								/>
							</div>
							<div className="w-full mb-5">
								<textarea
									id="contact-message"
									name="message"
									className="p-3 text-lg rounded-md w-full border bg-transparent text-black focus:outline-none"
									cols={30}
									rows={6}
									placeholder="Your Message"
									required
								></textarea>
							</div>
							<div className="w-full">
								<Button
									type="button"
									title="Send Message"
									variant="btn_green w-full"
								/>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
	);
};

export default Contact;

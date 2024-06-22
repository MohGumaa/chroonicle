'use client';

import React, { useState } from 'react';
import Title from './Title';
import Button from './Button';

const Contact = () => {
	const [formData, setFormData] = useState({
		name: '',
		email: '',
		phone: '',
		message: '',
	});

	const handleChange = (
		e: React.ChangeEvent<HTMLInputElement | HTMLTextAreaElement>
	) => {
		const { name, value } = e.target;
		setFormData({
			...formData,
			[name]: value,
		});
	};

	const handleSubmit = async (e: React.FormEvent) => {
		e.preventDefault();
		console.log(JSON.stringify(formData))
	}

	return (
		<section
			className="process bg-green-90 relative py-8 lg:py-12 z-30 snap-center"
			id="contact_us"
		>
			<div className="bg-overlay bg-gray-40 rounded-tl-[50px] lg:rounded-tl-[100px]"></div>
			<div className="max-container padding-container relative z-4">
				<div className="flexBetween flex-col md:flex-row gap-x-12 md:gap-x-20 gap-y-6 bg-white rounded-[50px] py-12 px-6 md:px-12">
					<div className="flex-1">
						<h4 className="font-[700] uppercase text-yellow-70 mb-3">
							get in touch
						</h4>
						<Title
							title="Ready to take your recruitment strategy to the next level?"
							className="text-green-90 mb-5"
						/>
						<p className="text-base md:text-lg text-neutral-10">
							Chronicle is here to help. Contact us today to schedule a
							consultation and take the first step towards building your dream
							team.
						</p>
					</div>
					<div className="flex-1">
						<form
							className="flex flex-col items-start w-full"
							onSubmit={handleSubmit}
						>
							<div className="w-full mb-5">
								<input
									id="contact-name"
									type="text"
									name="name"
									value={formData.name}
									onChange={handleChange}
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
									value={formData.email}
									onChange={handleChange}
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
									value={formData.phone}
									onChange={handleChange}
									className="p-3 text-lg rounded-md w-full border bg-transparent text-black focus:outline-none"
									placeholder="Your Phone"
									required
								/>
							</div>
							<div className="w-full mb-5">
								<textarea
									id="contact-message"
									name="message"
									value={formData.message}
									onChange={handleChange}
									className="p-3 text-lg rounded-md w-full border bg-transparent text-black focus:outline-none"
									cols={30}
									rows={6}
									placeholder="Your Message"
									required
								></textarea>
							</div>
							<div className="w-full">
								<Button
									type="submit"
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

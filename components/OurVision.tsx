import React from 'react';
import Title from './Title';
import CardBox from './CardBox';
import { CARDS_BOXS } from '@/constants';

const OurVision = () => {
	return (
		<section
			className="OurVision relative bg-gray-30 py-8 lg:py-12"
			id="our_vision"
		>
			<div className="bg-overlay bg-gray-40 rounded-tl-[50px] lg:rounded-tl-[100px]"></div>
			<div className="max-container padding-container relative z-10">
				<p className="text-green-50 font-bold uppercase text-center mb-4">
					our vision
				</p>
				<Title
					title="Transforming the Hiring Experience"
					className="text-center mb-2"
				/>
				<p className="text-base md:text-lg text-center text-neutral-10 mb-6">
					Chroonicle leverages the power of AI to match the right talent with
					the right opportunity. This innovative approach revolutionizes
					recruitment, ensuring a faster and smarter hiring process for both
					candidates and employers.
				</p>
				<div className="cards">
					{CARDS_BOXS.map((card) => (
						<CardBox
							key={card.id}
							title={card.title}
							subtitle={card.subtitle}
							text={card.text}
							img={card.img}
							cardClassName={card.cardClassName}
						/>
					))}
				</div>
			</div>
		</section>
	);
};

export default OurVision;

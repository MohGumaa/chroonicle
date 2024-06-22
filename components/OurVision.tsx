import React from 'react';
import Title from './Title';
import CardBox from './CardBox';
import { CARDS_BOXS } from '@/constants';

const OurVision = () => {
	return (
		<section
			className="OurVision relative bg-gray-30 py-8 lg:py-12 snap-center"
			id="our_vision"
		>
			<div className="bg-overlay bg-gray-40 rounded-tl-[50px] lg:rounded-tl-[100px]"></div>
			<div className="max-container padding-container relative z-2">
				<p className="text-green-50 font-bold uppercase text-center mb-4">
					our vision
				</p>
				<Title
					title="Expert Recruitment Solutions for Ambitious Businesses"
					className="text-center mb-2"
				/>
				<p className="text-sm md:text-lg text-center text-neutral-10 mb-6">
					In today's fast-paced business environment, finding and hiring the
					right talent is crucial for growth and success. At Chronicle, we
					understand the importance of recruitment for ambitious businesses,
					which is why we've helped hundreds of high-growth companies achieve
					hiring success.
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

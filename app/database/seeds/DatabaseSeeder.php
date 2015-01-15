<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		DB::statement('SET FOREIGN_KEY_CHECKS=0;');

			$this->call('CountriesSeeder');
			$this->call('DivisionSeeder');
			$this->call('DistrictSeeder');
			$this->call('UpozillasSeeder');
			$this->call('RankSeeder');
			$this->call('LanguageSeeder');
			$this->call('RankSeeder');
			$this->call('CadreSeeder');
			$this->call('DegreeSeeder');
			$this->call('GroundSeeder');
			$this->call('CourseSeeder');
			$this->call('DiciplineCatatgorySeeder');
			$this->call('DiciplineStatusSeeder');
			$this->call('AdditionalQualificationSeeder');
			$this->call('LeaveTypeSeeder');
			$this->call('NationalSenioritySeeder');
			$this->call('OrganizationSeeder');
			$this->call('PayScaleSeeder');
			$this->call('PositionSeeder');
			$this->call('PostSeeder');
			$this->call('PostingTypeSeeder');
			$this->call('PrinicipalSubjectSeeder');
			$this->call('PromotionTypeSeeder');
			$this->call('PublicationTypeSeeder');
			$this->call('PurposeSeeder');
			$this->call('SubjectSeeder');
			$this->call('ServiceTypeSeeder');
	}

}

<div id="wte__booking" class="wte-global-popup mfp-hide">
			<div class="wte-process-layout wte-popup-booking-wrapper">
				<nav class="wte-process-nav">
					<div class="wte-process-container">
						<ul class="wte-process-nav-list">
							<li class="wte-process-nav-item active">
								<a href="#">
									<span class="wte-icon">
										<svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14"><g id="Group_2371" data-name="Group 2371" transform="translate(0)"><rect id="Rectangle_1682" data-name="Rectangle 1682" width="13" height="3" transform="translate(0)" fill="#170d44" opacity="0.6"/><g id="Rectangle_1683" data-name="Rectangle 1683" transform="translate(0 3)" fill="none" stroke-width="1" opacity="0.6"><rect width="13" height="11" stroke="none"/><rect x="0.5" y="0.5" width="12" height="10" fill="none"/></g></g></svg>
									</span> 
									<?php esc_html_e( 'Date & Time', 'wp-travel-engine' ); ?>
									<span class="arrow">
										<svg xmlns="http://www.w3.org/2000/svg" width="5.81" height="10.121" viewBox="0 0 5.81 10.121">
											<path id="Path_23963" data-name="Path 23963" d="M3290.465,368.331l4,4-4,4" transform="translate(-3289.404 -367.271)" fill="none"  stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" opacity="0.8"/>
										</svg>
									</span>
								</a>
							</li>
							<li class="wte-process-nav-item">
								<a href="#">
									<span class="wte-icon">
										<svg xmlns="http://www.w3.org/2000/svg" width="10" height="14.812" viewBox="0 0 10 14.812"><g id="Group_2254" data-name="Group 2254" transform="translate(-1072.099 -77)"><g id="Group_2416" data-name="Group 2416" transform="translate(1072.099 77)"><path id="Path_23953" data-name="Path 23953" d="M33.115,6.1h-1.6V4.317a1.055,1.055,0,0,0-1.158-.9h-2.02a1.055,1.055,0,0,0-1.158.9V6.1h-1.6a1.121,1.121,0,0,0-1.232.958v9.236a1.1211.121,0,0,0,1.232.958h.628v.594a.448.448,0,0,0,.492.383h.32a.448.448,0,0,0,.493-.383v-.594h3.67v.594a.448.448,0,0,0,.493.383h.32a.448.448,0,0,0,.493-.383v-.594h.628a1.121,1.121,00,0,1.232-.958V7.057A1.12,1.12,0,0,0,33.115,6.1Zm-5.1-1.782a.292.292,0,0,1,.32-.249h2.02a.292.292,0,0,1,.32.249V6.1h-2.66Z" transform="translate(-24.346 -3.416)"/></g></g></svg>
									</span> 
									<?php esc_html_e( 'Package Type', 'wp-travel-engine' ); ?>
									<span class="arrow">
										<svg xmlns="http://www.w3.org/2000/svg" width="5.81" height="10.121" viewBox="0 0 5.81 10.121">
											<path id="Path_23963" data-name="Path 23963" d="M3290.465,368.331l4,4-4,4" transform="translate(-3289.404 -367.271)" fill="none"  stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" opacity="0.8"/>
										</svg>
									</span>
								</a>
							</li>
							<li class="wte-process-nav-item">
								<a href="#">
									<span class="wte-icon">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="4" viewBox="0 0 16 4">
											<g id="Group_2257" data-name="Group 2257" transform="translate(-349.914 -82)">
												<g id="Group_2418" data-name="Group 2418">
												<circle id="Ellipse_100" data-name="Ellipse 100" cx="2" cy="2" r="2" transform="translate(349.914 82)"/>
												<circle id="Ellipse_101" data-name="Ellipse 101" cx="2" cy="2" r="2" transform="translate(355.914 82)"/>
												<circle id="Ellipse_102" data-name="Ellipse 102" cx="2" cy="2" r="2" transform="translate(361.914 82)"/>
												</g>
											</g>
										</svg>
									</span> 
									<?php esc_html_e( 'Extra Services', 'wp-travel-engine' ); ?>
									<span class="arrow">
										<svg xmlns="http://www.w3.org/2000/svg" width="5.81" height="10.121" viewBox="0 0 5.81 10.121">
											<path id="Path_23963" data-name="Path 23963" d="M3290.465,368.331l4,4-4,4" transform="translate(-3289.404 -367.271)" fill="none"  stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" opacity="0.8"/>
										</svg>
									</span>
								</a>
							</li>
						</ul>
					</div>
				</nav>
				<div class="wte-process-tabs">
					<div id="wteProcessTabs" class="wte-process-container">
						<div class="wte-process-tab-item">
							<div class="wte-process-tab-content-wrapper">
								<h5 class="wte-process-tab-title"><?php esc_html_e( 'Select Date & Time', 'wp-travel-engine' ); ?></h5>
								<div class="wte-process-tab-content">
									<div id="wte-booking-date-calendar"></div>
								</div>
							</div>
						</div>
						<div class="wte-process-tab-item">
							<div class="wte-process-tab-content-wrapper">
								<div id="wte-booking-packages"></div>
								<?php wte_get_template( 'script-templates/booking-process/tmpl-wte-booking-packages.php' ); ?>
							</div>
						</div>
						<div class="wte-process-tab-item">
							<div class="wte-process-tab-content-wrapper">
								<h5 class="wte-process-tab-title">Select Extra Services</h5>
								<div class="wte-trip-options">
									<div class="wte-trip-guest-wrapper">
										<div class="check-in-wrapper">
											<label>Porter</label>
											<span class="wte-meta-help">
												<svg xmlns="http://www.w3.org/2000/svg" width="6" height="8.226" viewBox="0 0 6 8.226">
													<path id="Path_23222" data-name="Path 23222" d="M361.369,288.944a1.569,1.569,0,0,0-1.026,1.453v.365h-1.014a4.251,4.251,0,0,1,.119-1.217,2.424,2.424,0,0,1,1.026-1.126c.9-.536,1.311-1.088,1.252-1.656-.089-.81-.611-1.238-1.56-1.292a1.956,1.956,0,0,0-2.1,1.656l-1.079-.466.178-.418c.492-1.147,1.554-1.7,3.179-1.656,1.607.08,2.485.783,2.633,2.1q.134,1.254-1.607,2.262Zm-1.014,3.865h-1.026v-1.034h1.026Z" transform="translate(-356.985 -284.584)" fill="#170d44"/>
												</svg>
											</span>
										</div>
										<div class="select-wrapper">
											<div class="amount-per-person">
												<span class="regular-price"><del>$1200</del></span>
												<span class="offer-price">$<strong>1000</strong></span>
												<span class="per-text">/ Person</span>
											</div>
											<div class="wte-qty-number">
												<span class="prev">
													<svg xmlns="http://www.w3.org/2000/svg" width="14" height="2" viewBox="0 0 14 2">
														<path id="Path_23951" data-name="Path 23951" d="M0,0H12" transform="translate(1 1)" fill="none" stroke="#170d44" stroke-linecap="round" stroke-width="2" opacity="0.5"/>
													</svg>
												</span>
												<input type="text" value="0" readonly>
												<span class="next">
													<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14">
														<g id="Group_2263" data-name="Group 2263" transform="translate(-78 -14)" opacity="0.5">
															<line id="Line_2" data-name="Line 2" x2="12" transform="translate(79 21)" fill="none" stroke="#170d44" stroke-linecap="round" stroke-width="2"/>
															<line id="Line_3" data-name="Line 3" x2="12" transform="translate(84.999 15) rotate(90)" fill="none" stroke="#170d44" stroke-linecap="round" stroke-width="2"/>
														</g>
													</svg>
												</span>
											</div>
										</div>
									</div>
									<div class="wte-trip-guest-wrapper">
										<div class="check-in-wrapper">
											<label>AirPort Pickup</label>
											<span class="wte-meta-help">
												<svg xmlns="http://www.w3.org/2000/svg" width="6" height="8.226" viewBox="0 0 6 8.226">
													<path id="Path_23222" data-name="Path 23222" d="M361.369,288.944a1.569,1.569,0,0,0-1.026,1.453v.365h-1.014a4.251,4.251,0,0,1,.119-1.217,2.424,2.424,0,0,1,1.026-1.126c.9-.536,1.311-1.088,1.252-1.656-.089-.81-.611-1.238-1.56-1.292a1.956,1.956,0,0,0-2.1,1.656l-1.079-.466.178-.418c.492-1.147,1.554-1.7,3.179-1.656,1.607.08,2.485.783,2.633,2.1q.134,1.254-1.607,2.262Zm-1.014,3.865h-1.026v-1.034h1.026Z" transform="translate(-356.985 -284.584)" fill="#170d44"/>
												</svg>
											</span>
										</div>
										<div class="select-wrapper">
											<div class="amount-per-person">
												<span class="regular-price"><del>$800</del></span>
												<span class="offer-price">$<strong>600</strong></span>
												<span class="per-text">/ Person</span>
											</div>
											<div class="wte-qty-number">
												<span class="prev">
													<svg xmlns="http://www.w3.org/2000/svg" width="14" height="2" viewBox="0 0 14 2">
														<path id="Path_23951" data-name="Path 23951" d="M0,0H12" transform="translate(1 1)" fill="none" stroke="#170d44" stroke-linecap="round" stroke-width="2" opacity="0.5"/>
													</svg>
												</span>
												<input type="text" value="0" readonly>
												<span class="next">
													<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14">
														<g id="Group_2263" data-name="Group 2263" transform="translate(-78 -14)" opacity="0.5">
															<line id="Line_2" data-name="Line 2" x2="12" transform="translate(79 21)" fill="none" stroke="#170d44" stroke-linecap="round" stroke-width="2"/>
															<line id="Line_3" data-name="Line 3" x2="12" transform="translate(84.999 15) rotate(90)" fill="none" stroke="#170d44" stroke-linecap="round" stroke-width="2"/>
														</g>
													</svg>
												</span>
											</div>
										</div>
									</div>
								</div>
								<hr>
								<h5 class="wte-process-tab-title">Hotel Rooms</h5>
								<div class="wte-trip-options">
									<div class="owl-carousel wte-es-with-multiple-options wte-owl-carousel">
										<div class="item">
											<div class="wte-trip-guest-wrapper vertical">
												<div class="check-in-wrapper">
													<label>Double Room</label>
													<span class="wte-meta-help">
														<svg xmlns="http://www.w3.org/2000/svg" width="6" height="8.226" viewBox="0 0 6 8.226">
															<path id="Path_23222" data-name="Path 23222" d="M361.369,288.944a1.569,1.569,0,0,0-1.026,1.453v.365h-1.014a4.251,4.251,0,0,1,.119-1.217,2.424,2.424,0,0,1,1.026-1.126c.9-.536,1.311-1.088,1.252-1.656-.089-.81-.611-1.238-1.56-1.292a1.956,1.956,0,0,0-2.1,1.656l-1.079-.466.178-.418c.492-1.147,1.554-1.7,3.179-1.656,1.607.08,2.485.783,2.633,2.1q.134,1.254-1.607,2.262Zm-1.014,3.865h-1.026v-1.034h1.026Z" transform="translate(-356.985 -284.584)" fill="#170d44"/>
														</svg>
													</span>
												</div>
												<div class="select-wrapper">
													<div class="amount-per-person">
														<span class="offer-price">$<strong>600</strong></span>
														<span class="per-text">/ Person</span>
													</div>
													<div class="wte-qty-number">
														<span class="prev">
															<svg xmlns="http://www.w3.org/2000/svg" width="14" height="2" viewBox="0 0 14 2">
																<path id="Path_23951" data-name="Path 23951" d="M0,0H12" transform="translate(1 1)" fill="none" stroke="#170d44" stroke-linecap="round" stroke-width="2" opacity="0.5"/>
															</svg>
														</span>
														<input type="text" value="0" readonly>
														<span class="next">
															<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14">
																<g id="Group_2263" data-name="Group 2263" transform="translate(-78 -14)" opacity="0.5">
																	<line id="Line_2" data-name="Line 2" x2="12" transform="translate(79 21)" fill="none" stroke="#170d44" stroke-linecap="round" stroke-width="2"/>
																	<line id="Line_3" data-name="Line 3" x2="12" transform="translate(84.999 15) rotate(90)" fill="none" stroke="#170d44" stroke-linecap="round" stroke-width="2"/>
																</g>
															</svg>
														</span>
													</div>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="wte-trip-guest-wrapper vertical">
												<div class="check-in-wrapper">
													<label>Deluxe Room</label>
													<span class="wte-meta-help">
														<svg xmlns="http://www.w3.org/2000/svg" width="6" height="8.226" viewBox="0 0 6 8.226">
															<path id="Path_23222" data-name="Path 23222" d="M361.369,288.944a1.569,1.569,0,0,0-1.026,1.453v.365h-1.014a4.251,4.251,0,0,1,.119-1.217,2.424,2.424,0,0,1,1.026-1.126c.9-.536,1.311-1.088,1.252-1.656-.089-.81-.611-1.238-1.56-1.292a1.956,1.956,0,0,0-2.1,1.656l-1.079-.466.178-.418c.492-1.147,1.554-1.7,3.179-1.656,1.607.08,2.485.783,2.633,2.1q.134,1.254-1.607,2.262Zm-1.014,3.865h-1.026v-1.034h1.026Z" transform="translate(-356.985 -284.584)" fill="#170d44"/>
														</svg>
													</span>
												</div>
												<div class="select-wrapper">
													<div class="amount-per-person">
														<span class="offer-price">$<strong>600</strong></span>
														<span class="per-text">/ Person</span>
													</div>
													<div class="wte-qty-number">
														<span class="prev">
															<svg xmlns="http://www.w3.org/2000/svg" width="14" height="2" viewBox="0 0 14 2">
																<path id="Path_23951" data-name="Path 23951" d="M0,0H12" transform="translate(1 1)" fill="none" stroke="#170d44" stroke-linecap="round" stroke-width="2" opacity="0.5"/>
															</svg>
														</span>
														<input type="text" value="0" readonly>
														<span class="next">
															<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14">
																<g id="Group_2263" data-name="Group 2263" transform="translate(-78 -14)" opacity="0.5">
																	<line id="Line_2" data-name="Line 2" x2="12" transform="translate(79 21)" fill="none" stroke="#170d44" stroke-linecap="round" stroke-width="2"/>
																	<line id="Line_3" data-name="Line 3" x2="12" transform="translate(84.999 15) rotate(90)" fill="none" stroke="#170d44" stroke-linecap="round" stroke-width="2"/>
																</g>
															</svg>
														</span>
													</div>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="wte-trip-guest-wrapper vertical">
												<div class="check-in-wrapper">
													<label>Twin Room</label>
													<span class="wte-meta-help">
														<svg xmlns="http://www.w3.org/2000/svg" width="6" height="8.226" viewBox="0 0 6 8.226">
															<path id="Path_23222" data-name="Path 23222" d="M361.369,288.944a1.569,1.569,0,0,0-1.026,1.453v.365h-1.014a4.251,4.251,0,0,1,.119-1.217,2.424,2.424,0,0,1,1.026-1.126c.9-.536,1.311-1.088,1.252-1.656-.089-.81-.611-1.238-1.56-1.292a1.956,1.956,0,0,0-2.1,1.656l-1.079-.466.178-.418c.492-1.147,1.554-1.7,3.179-1.656,1.607.08,2.485.783,2.633,2.1q.134,1.254-1.607,2.262Zm-1.014,3.865h-1.026v-1.034h1.026Z" transform="translate(-356.985 -284.584)" fill="#170d44"/>
														</svg>
													</span>
												</div>
												<div class="select-wrapper">
													<div class="amount-per-person">
														<span class="offer-price">$<strong>600</strong></span>
														<span class="per-text">/ Person</span>
													</div>
													<div class="wte-qty-number">
														<span class="prev">
															<svg xmlns="http://www.w3.org/2000/svg" width="14" height="2" viewBox="0 0 14 2">
																<path id="Path_23951" data-name="Path 23951" d="M0,0H12" transform="translate(1 1)" fill="none" stroke="#170d44" stroke-linecap="round" stroke-width="2" opacity="0.5"/>
															</svg>
														</span>
														<input type="text" value="0" readonly>
														<span class="next">
															<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14">
																<g id="Group_2263" data-name="Group 2263" transform="translate(-78 -14)" opacity="0.5">
																	<line id="Line_2" data-name="Line 2" x2="12" transform="translate(79 21)" fill="none" stroke="#170d44" stroke-linecap="round" stroke-width="2"/>
																	<line id="Line_3" data-name="Line 3" x2="12" transform="translate(84.999 15) rotate(90)" fill="none" stroke="#170d44" stroke-linecap="round" stroke-width="2"/>
																</g>
															</svg>
														</span>
													</div>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="wte-trip-guest-wrapper vertical">
												<div class="check-in-wrapper">
													<label>Twin Double Room</label>
													<span class="wte-meta-help">
														<svg xmlns="http://www.w3.org/2000/svg" width="6" height="8.226" viewBox="0 0 6 8.226">
															<path id="Path_23222" data-name="Path 23222" d="M361.369,288.944a1.569,1.569,0,0,0-1.026,1.453v.365h-1.014a4.251,4.251,0,0,1,.119-1.217,2.424,2.424,0,0,1,1.026-1.126c.9-.536,1.311-1.088,1.252-1.656-.089-.81-.611-1.238-1.56-1.292a1.956,1.956,0,0,0-2.1,1.656l-1.079-.466.178-.418c.492-1.147,1.554-1.7,3.179-1.656,1.607.08,2.485.783,2.633,2.1q.134,1.254-1.607,2.262Zm-1.014,3.865h-1.026v-1.034h1.026Z" transform="translate(-356.985 -284.584)" fill="#170d44"/>
														</svg>
													</span>
												</div>
												<div class="select-wrapper">
													<div class="amount-per-person">
														<span class="offer-price">$<strong>600</strong></span>
														<span class="per-text">/ Person</span>
													</div>
													<div class="wte-qty-number">
														<span class="prev">
															<svg xmlns="http://www.w3.org/2000/svg" width="14" height="2" viewBox="0 0 14 2">
																<path id="Path_23951" data-name="Path 23951" d="M0,0H12" transform="translate(1 1)" fill="none" stroke="#170d44" stroke-linecap="round" stroke-width="2" opacity="0.5"/>
															</svg>
														</span>
														<input type="text" value="0" readonly>
														<span class="next">
															<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14">
																<g id="Group_2263" data-name="Group 2263" transform="translate(-78 -14)" opacity="0.5">
																	<line id="Line_2" data-name="Line 2" x2="12" transform="translate(79 21)" fill="none" stroke="#170d44" stroke-linecap="round" stroke-width="2"/>
																	<line id="Line_3" data-name="Line 3" x2="12" transform="translate(84.999 15) rotate(90)" fill="none" stroke="#170d44" stroke-linecap="round" stroke-width="2"/>
																</g>
															</svg>
														</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="wte-process-tab-controller">
							<button type="button" id="wteProcessPrev" class="wte-process-btn wte-process-btn-prev" onclick="nextPrev(-1)">
								<svg xmlns="http://www.w3.org/2000/svg" width="5.811" height="10.121" viewBox="0 0 5.811 10.121">
									<path id="Path_23952" data-name="Path 23952" d="M3294.464,368.331l-4,4,4,4" transform="translate(-3289.714 -367.271)" fill="none" stroke="#147dfe" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
								</svg>
								<?php esc_html_e( 'Back', 'wp-travel-engine' ); ?>
							</button>
							<button type="button" id="wteProcessNext" class="wte-process-btn wte-process-btn-next" onclick="nextPrev(1)"><?php esc_html_e( 'Continue', 'wp-travel-engine' ); ?></button>
						</div>
					</div>
				</div>
				<aside class="wte-popup-sidebar">
					<div class="wte-booking-summary">
						<div id="wte-booking-summary"></div>
						<?php wte_get_template( 'script-templates/booking-process/tmpl-wte-booking-summary.php' ); ?>
					</div>
				</aside>
			</div>
		</div>

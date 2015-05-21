<p><b>Booking list</b><p>
		<!-- Form -->
		<form class="booking"> <!-- Just an empty form to do the form child layouts properly -->
			<fieldset>
				Cinema Type
				<select id="cinemaType" name = "cinema">
					<option value=""></option> 
					<option value="Valentine">Valentine</option>
					<option value="Orson">Orson</option>
				</select>
			</fieldset>
		

            <!-- Valentine -->
            <div>
                <fieldset id = "ValentineDay">
                    Available day for Valentine
                    <select name ="day">
                        <option value=""></option>
                        <option value="Monday">Monday</option>
                        <option value="Tuesday">Tuesday</option>
                        <option value="Wednesday">Wednesday</option>
                        <option value="Thursday">Thursday</option>
                        <option value="Friday">Friday</option>
                    </select>
                </fieldset>

                <fieldset id ="ValentineTime">
                    Available time slot for Cinema Valentine
                    <select name ="time">
                        <option value=""></option>
                        <option value="3">1pm</option>
                        <option value="6">6pm</option>
                        <option value="9">9pm</option>
                    </select>
                </fieldset>
                <!-- Table price for Monday and Tuesday Valentine -->
                <fieldset id ="ValentinePrice1">
                    <table>
                        <tr>
                            <th> Seat Type </th>
                            <th> Price </th>
                            <th> Quantity </th>
                            <th> Total </th>
                        </tr>
                        <tr>
                            <th> Standard-Full </th>
                            <th> $12 </th>
                            <th> <input id ="AdultValentine1" type="number" value="0" min = "0" max ="20" onchange="ValentineAdult1(); ValentineTotal1();"/> </th>
                            <th> $<span id = "salePriceAdult1" ></span>  </th>
                        </tr>
                        <tr>
                            <th> Standard-Conc </th>
                            <th> $10 </th>
                            <th> <input id ="ConcValentine1" type="number" value="0" min = "0" max ="20" onchange = "ValentineConc1();ValentineTotal1();" />  </th>
                            <th> $<span id = "salePriceConc1"></span>  </th>
                        </tr>
                        <tr>
                            <th> Standard-Child </th>
                            <th> $8 </th>
                            <th> <input id ="ChildValentine1" type="number" value="0" min = "0" max ="20" onchange ="ValentineChild1();ValentineTotal1();"/>  </th>
                            <th> $<span id = "salePriceChild1" ></span>  </th>
                        </tr>
                        <tr>
                            <th> FirstClass-Adult </th>
                            <th> $25 </th>
                            <th> <input id ="FCAValentine1" type="number" value="0" min = "0" max ="20" onchange ="ValentineFCA1();ValentineTotal1();">  </th>
                            <th> $<span id = "salePriceFCA1"></span>  </th>
                        </tr>
                        <tr>
                            <th> FirstClass-Child </th>
                            <th> $20 </th>
                            <th> <input id ="FCCValentine1" type="number" value="0" min = "0" max ="20" onchange ="ValentineFCC1();ValentineTotal1();" />  </th>
                            <th> $<span id = "salePriceFCC1"></span> </th>
                        </tr>
                        <tr>
                            <th> Beanbag </th>
                            <th> $20 </th>
                            <th> <input id ="BBValentine1" type="number" value="0" min = "0" max ="20" onchange ="ValentineBB1();ValentineTotal1();"/>  </th>
                            <th> $<span id = "salePriceBB1" ></span> </th>
                        </tr>
                        <tr>
                        </tr>
                        <tr>
                            <th> Total amount </th>
                            <th> </th>
                            <th> <input type = "hidden" name ="price" value = "" id = "submitPrice1" /></th>
                            <th>$<span id ="Total1"></span> </th>
                        </tr>
                    </table>
                </fieldset>

                <!-- Table price for Wednesday to Friday Valentine -->
                <fieldset id ="ValentinePrice2">
                    <table>
                        <tr>
                            <th> Seat Type </th>
                            <th> Price </th>
                            <th> Quantity </th>
                            <th> Total </th>
                        </tr>
                        <tr>
                            <th> Standard-Full </th>
                            <th> $18 </th>
                            <th> <input id ="AdultValentine2" type="number" value="0" min = "0" max ="20" onchange="ValentineAdult2();ValentineTotal2();"/> </th>
                            <th> $<span id = "salePriceAdult2" ></span> </th>
                        </tr>
                        <tr>
                            <th> Standard-Conc </th>
                            <th> $15 </th>
                            <th> <input id ="ConcValentine2" type="number" value="0" min = "0" max ="20" onchange = "ValentineConc2();ValentineTotal2();" />  </th>
                            <th> $<span id = "salePriceConc2"></span> </th>
                        </tr>
                        <tr>
                            <th> Standard-Child </th>
                            <th> $12 </th>
                            <th> <input id ="ChildValentine2" type="number" value="0" min = "0" max ="20" onchange ="ValentineChild2();ValentineTotal2();"/> </th>
                            <th> $<span id = "salePriceChild2" ></span> </th>
                        </tr>
                        <tr>
                            <th> FirstClass-Adult </th>
                            <th> $30 </th>
                            <th> <input id ="FCAValentine2" type="number"  value="0" min = "0" max ="20" onchange ="ValentineFCA2();ValentineTotal2();"> </th>
                            <th> $<span id = "salePriceFCA2"></span> </th>
                        </tr>
                        <tr>
                            <th> FirstClass-Child </th>
                            <th> $25 </th>
                            <th> <input id ="FCCValentine2" type="number" value="0" min = "0" max ="20" onchange ="ValentineFCC2();ValentineTotal2();" />  </th>
                            <th> $<span id = "salePriceFCC2"></span> </th>
                        </tr>
                        <tr>
                            <th> Beanbag </th>
                            <th> $30 </th>
                            <th> <input id ="BBValentine2" type="number" value="0" min = "0" max ="20" onchange ="ValentineBB2();ValentineTotal2();"/> </th>
                            <th> $<span id = "salePriceBB2" ></span> </th>
                        </tr>
                        <tr>
                        </tr>
                        <tr>
                            <th> Total amount </th>
                            <th> </th>
                            <th><input type = "hidden" name ="price" value = "" id = "submitPrice2" /> </th>
                            <th> $<span id = "Total2" > </span> </th>
                        </tr>
                    </table>
                </fieldset>
            </div>


            <!-- Orson -->
            <div>
                <fieldset id = "OrsonDay">
                    Available day for Orson
                    <select name = "day">
                        <option value=""></option>
                        <option value="Saturday">Saturday</option>
                        <option value="Sunday">Sunday</option>
                    </select>
                </fieldset>
                <fieldset id ="OrsonTime">
                    Available time slot for Cinema Orson
                    <select name ="time">
                        <option value=""></option>
                        <option value="3">3pm</option>
                        <option value="6">6pm</option>
                        <option value="9">9pm</option>
						<option value="12">12pm</option>
                    </select>
                </fieldset>
                <fieldset id ="OrsonPrice1">
                    <!-- Table price for Sat and Sunday of Orson -->
                    <table>
                        <tr>
                            <th> Seat Type </th>
                            <th> Price </th>
                            <th> Quantity </th>
                            <th> Total </th>
                        </tr>
                        <tr>
                            <th> Standard-Full </th>
                            <th> $18 </th>
                            <th> <input id ="AdultOrson3" type="number"  value="0" min = "0" max ="20" onchange="OrsonAdult3();OrsonTotal3();"/>  </th>
                            <th> $<span id = "salePriceAdult3" ></span> </th>
                        </tr>
                        <tr>
                            <th> Standard-Conc </th>
                            <th> $15 </th>
                            <th> <input id ="ConcOrson3" type="number"  value="0" min = "0" max ="20" onchange="OrsonConc3();OrsonTotal3();"/> </th>
                            <th> $<span id = "salePriceConc3" ></span> </th>
                        </tr>
                        <tr>
                            <th> Standard-Child </th>
                            <th> $12 </th>
                            <th> <input id ="ChildOrson3" type="number"  value="0" min = "0" max ="20" onchange="OrsonChild3();OrsonTotal3();"/> </th>
                            <th> $<span id = "salePriceChild3" ></span> </th>
                        </tr>
                        <tr>
                            <th> FirstClass-Adult </th>
                            <th> $30 </th>
                            <th> <input id ="FCAOrson3" type="number" value="0" min = "0" max ="20" onchange ="OrsonFCA3();OrsonTotal3();">  </th>
                            <th> $<span id = "salePriceFCA3"></span>  </th>
                        </tr>
                        <tr>
                            <th> FirstClass-Child </th>
                            <th> $25 </th>
                            <th> <input id ="FCCOrcon3" type="number" value="0" min = "0" max ="20" onchange ="OrsonFCC3();OrsonTotal3();" />  </th>
                            <th> $<span id = "salePriceFCC3"></span> </th>
                        </tr>
                        <tr>
                            <th> Beanbag </th>
                            <th> $30 </th>
                            <th> <input id ="BBOrson3" type="number" value="0" min = "0" max ="20" onchange ="OrsonBB3();OrsonTotal3();"/>  </th>
                            <th> $<span id = "salePriceBB3" ></span> </th>
                        </tr>
                        <tr>
                            <th> Total amount </th>
                            <th> </th>
                            <th><input type = "hidden" name ="price" value = "" id = "submitPrice3" /> </th>
                            <th>$<span id = "Total3"> </span></th>
                        </tr>
                    </table>
                </fieldset>
                
                
                <fieldset id = "OrsonPrice2">
                    <!-- Wed-Fri and Saturday Sunday of Orson -->
                    <table>
                        <tr>
                            <th> Seat Type </th>
                            <th> Price </th>
                            <th> Quantity </th>
                            <th> Total </th>
                        </tr>
                        <tr>
                            <th> Standard-Full </th>
                            <th> $18 </th>
                            <th> <input id ="AdultOrson4" type="number"  value="0" min = "0" max ="20" onchange="OrsonAdult4();OrsonTotal4();"/> </th>
                            <th> $<span id = "salePriceAdult4" ></span> </th>
                        </tr>
                        <tr>
                            <th> Standard-Conc </th>
                            <th> $15 </th>
                            <th> <input id ="ConcOrson4" type="number"  value="0" min = "0" max ="20" onchange="OrsonConc4();OrsonTotal4();"/> </th>
                            <th> $<span id = "salePriceConc4" ></span> </th>
                        </tr>
                        <tr>
                            <th> Standard-Child </th>
                            <th> $12 </th>
                            <th> <input id ="ChildOrson4" type="number"  value="0" min = "0" max ="20" onchange="OrsonChild4();OrsonTotal4();"/> </th>
                            <th> $<span id = "salePriceChild4" ></span> </th>
                        </tr>
                        <tr>
                        </tr>
                        <tr>
                            <th> Total amount </th>
                            <th> </th>
                            <th><input type = "hidden" name ="price" value = "" id = "submitPrice4" /> </th>
                            <th>$<span id = "Total4"> </span> </th>
                        </tr>
                    </table>
                </fieldset>
            </div>
        </form>
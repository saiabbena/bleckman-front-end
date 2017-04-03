    <nav class="sub-menu menu-toggle grid-3 portrait-hidden">
      <h1 class="title">Contents</h1>
      <a name="table-of-contents"></a>
      <ol class="toc-node-numbers">
        <li class="toc-node-level-1 first"><a href="#mode1"><span class="toc-text">Operation Mode1</span></a></li>
            <ol class="children" style="display: block;">
                <li class="toc-node-level-2"><a href="#GetAllActiveCountriesbyCustomerid"><span class="toc-text">GetAllActiveCountriesbyCustomerid</span></a></li>
                <li class="toc-node-level-2"><a href="#GetBMCarriersbyCustomerid"><span class="toc-text">GetBMCarriersbyCustomerid</span></a></li>
                <li class="toc-node-level-2"><a href="#PostMode1"><span class="toc-text">PostMode1</span></a></li>
            </ol>
        <li class="toc-node-level-1"><a href="#mode2"><span class="toc-text">Operation Mode2</span></a></li>
            <ol class="children" style="display: block;">
                <li class="toc-node-level-2"><a href="#GetBMAllOrdersbyid"><span class="toc-text">GetBMAllOrdersbyid</span></a></li>
                <li class="toc-node-level-2"><a href="#GetAllReturnReasonsbyCustomerid"><span class="toc-text">GetAllReturnReasonsbyCustomerid</span></a></li>
                <li class="toc-node-level-2"><a href="#GetBMCarriersbyCustomerid"><span class="toc-text">GetBMCarriersbyCustomerid</span></a></li>
                <li class="toc-node-level-2"><a href="#PostBMReturnOrder"><span class="toc-text">PostBMReturnOrder</span></a></li>
            </ol>
        <li class="toc-node-level-1"><a href="#mode3"><span class="toc-text">Operation Mode3</span></a></li>
            <ol class="children" style="display: block;">
                <li class="toc-node-level-2"><a href="#GetAllActiveCountriesbyCustomerid3"><span class="toc-text">GetAllActiveCountriesbyCustomerid</span></a></li>
                <li class="toc-node-level-2"><a href="#GetBMCarriersbyCustomerid3"><span class="toc-text">GetBMCarriersbyCustomerid</span></a></li>
                <li class="toc-node-level-2"><a href="#PostMode3"><span class="toc-text">PostMode3</span></a></li>
            </ol>
        <li class="toc-node-level-1"><a href="#mode4"><span class="toc-text">Operation Mode4</span></a></li>
            <ol class="children" style="display: block;">
                <li class="toc-node-level-2"><a href="#PostSearchOrders"><span class="toc-text">PostSearchOrders</span></a></li>
                <li class="toc-node-level-2"><a href="#GetBMAllOrdersbyid4"><span class="toc-text">GetBMAllOrdersbyid</span></a></li>
                <li class="toc-node-level-2"><a href="#GetAllReturnReasonsbyCustomerid4"><span class="toc-text">GetAllReturnReasonsbyCustomerid</span></a></li>
                <li class="toc-node-level-2"><a href="#GetBMCarriersbyCustomerid4"><span class="toc-text">GetBMCarriersbyCustomerid</span></a></li>
                <li class="toc-node-level-2"><a href="#PostBMReturnOrder4"><span class="toc-text">PostBMReturnOrder</span></a></li>
            </ol>
        <li class="toc-node-level-5"><a href="#mode5"><span class="toc-text">Operation Mode5</span></a></li>
            <ol class="children" style="display: block;">
<!--                 <li class="toc-node-level-2"><a href="#GetAllReturnReasonsbyCustomerid5"><span class="toc-text">GetAllActiveCountriesbyCustomerid</span></a></li>
                <li class="toc-node-level-2"><a href="#GetBMCarriersbyCustomerid5"><span class="toc-text">GetBMCarriersbyCustomerid</span></a></li> -->
                <li class="toc-node-level-2"><a href="#PostMode5"><span class="toc-text">PostMode5</span></a></li>
            </ol>
      </ol>
    </nav>
    <article class="portrait-8 grid-6 desktop-10">
      <div class="portrait-8 grid-6 desktop-10">
        <div class="content">
            <div>
            <div class="toc-item-anchor"><a name="mode1"></a></div>
            <h2 class="h2 title toc-headings" style="color:#cc1543;">Operation Mode 1</h2>

            <div class="toc-item-anchor"><a name="GetAllActiveCountriesbyCustomerid"></a></div>
            <h2 class="h2 title toc-headings">GetAllActiveCountriesbyCustomerid</h2>
            <ul class="details">
                <li><i>URL: </i>http://<<baseurl>>/api/Country/GetAllActiveCountriesbyCustomerid</li>
                <li><i>Description: </i>This call is used to get Countries by Customer ID and from this response pick up the CountryCode as this will be used in the subsequesnt API calls “GetBMCarriersbyCustomerid” and “PostMode1”.</li>
            </ul>

            <h2 class="h2 title toc-headings">Method</h2>
            <table cellspacing="1" cellpadding="1" border="1">
                <thead>
                    <tr>
                        <th scope="col"><strong>Method</strong></th>
                        <th scope="col"><strong>Description</strong></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>GetAllActiveCountriesbyCustomerId</td>
                        <td>Gets all active countries based on customerid provided&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    </tr>
                </tbody>
            </table>
            <h2 class="h2 title toc-headings">Call Details</h2>
            <table cellspacing="0" cellpadding="0" border="0">
                <tbody>
                    <tr>
                        <td nowrap="">
                            <p><strong>Field Name</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Sample Value</strong></p>
                        </td>
                        <td nowrap="">
                          <p><strong>Optional</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Description</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Data Type</strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>CustomerId</p>
                        </td>
                        <td nowrap="">
                            <p>apoyartest</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td nowrap="">
                            <p>Alpha Numeric</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h2 class="h2 title toc-headings">Request example</h2>
            <table cellspacing="0" cellpadding="0" border="0">
                <tbody>
                    <tr>
                        <td nowrap="">
                            <p><strong>Location</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>URL</strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Sandbox URL</p>
                        </td>
                        <td nowrap="">
                            <p>http://api.bleckmann.apoyar.eu/api/Country/GetAllActiveCountriesbyCustomerid?Customerid=test</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Live URL</p>
                        </td>
                        <td nowrap="">
                            <p>http://returns.bleckmann.com:81/BMAPI/BleckmannApi/api/Country/GetAllActiveCountriesbyCustomerid?Customerid=apoyartest</p>
                        </td>
                    </tr>
                </tbody>
            </table>

            <h2 class="h2 title toc-headings">Response example</h2>
            <div class="geshifilter">
                <pre style="border-left:0px;">
                    [{
                        PKCountryId: 73,
                        CountryName: "FRANCE",
                        CountryCode: "FR",
                        IsActive: true
                    },
                    {
                        PKCountryId: 103,
                        CountryName: "IRELAND",
                        CountryCode: "IE",
                        IsActive: true
                    },
                    {
                        PKCountryId: 150,
                        CountryName: "NETHERLANDS",
                        CountryCode: "NL",
                        IsActive: true
                    },
                    {
                        PKCountryId: 225,
                        CountryName: "UNITED KINGDOM",
                        CountryCode: "GB",
                        IsActive: true
                    }]
                </pre>
            </div>
            <div class="toc-item-anchor">
                <a name="GetBMCarriersbyCustomerid"></a>
            </div>
            <h2 class="h2 title toc-headings toc-headings">GetBMCarriersbyCustomerId</h2>
            <ul class="details">
                <li><i>URL: </i>http://<<baseurl>>/api/Carrier/GetBMCarriersbyCustomerid</li>
                <li><i>Description: </i>This call is used to get Carriers by Customer ID and selected country (which you get from above API call) and from this response pick up the values for  PKCarrierid, Carriername, Warehouseid as these values will be used in “PostMode1”.</li>
            </ul>     
            <h2 class="h2 title toc-headings">Method</h2>
            <table cellspacing="1" cellpadding="1" border="1">
                <thead>
                    <tr>
                        <th scope="col"><strong>Method</strong></th>
                        <th scope="col"><strong>Description</strong></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>GetBMCarriersbyCustomerId</td>
                        <td>Get Carriers by Customer Id and Country Code&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    </tr>
                </tbody>
            </table>
            <h2 class="h2 title toc-headings">Call Details</h2>
            <table cellspacing="0" cellpadding="0" border="0">
                <tbody>
                    <tr>
                        <td nowrap="">
                            <p><strong>Field Name</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Sample Value</strong></p>
                        </td>
                        <td nowrap="">
                          <p><strong>Optional</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Description</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Data Type</strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>CountryCode</p>
                        </td>
                        <td nowrap="">
                            <p>GB</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td nowrap="">
                            <p>2 Character Code</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>CustomerId</p>
                        </td>
                        <td nowrap="">
                            <p>apoyartest</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td nowrap="">
                            <p>AlphaNumeric</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h2 class="h2 title toc-headings">Request example</h2>
            <table cellspacing="0" cellpadding="0" border="0">
                <tbody>
                    <tr>
                        <td nowrap="">
                            <p><strong>Location</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>URL</strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Sandbox URL</p>
                        </td>
                        <td nowrap="">
                            <p>http://api.bleckmann.apoyar.eu/api/Carrier/GetBMCarriersbyCustomerid?Customerid=test&CountryCode=GB</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Live URL</p>
                        </td>
                        <td nowrap="">
                            <p>http://returns.bleckmann.com:81/BMAPI/BleckmannApi/api/Carrier/GetBMCarriersbyCustomerid?Customerid=apoyartest&CountryCode=GB</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h2 class="h2 title toc-headings">Response example</h2>
            <div class="geshifilter">
                <pre style="border-left:0px;">
                    [{
                        PKCarrierID: 2,
                        CarrierName: "RoyalMail",
                        Isactive: true,
                        WarehouseId: "KH",
                        Preferredcarrier: true,
                        GlobalSetting: null,
                        CarrierSetting: null
                    },
                    {
                        PKCarrierID: 19,
                        CarrierName: "Fastway",
                        Isactive: true,
                        WarehouseId: "KHTRUEFC",
                        Preferredcarrier: false,
                        GlobalSetting: null,
                        CarrierSetting: null
                    }]
                </pre>
            </div>
            <div class="toc-item-anchor"><a name="PostMode1"></a></div>
            <h2 class="h2 title toc-headings">PostMode1</h2>
            <ul class="details">
                <li><i>URL: </i>http://<<baseurl>>/api/returnorder/PostMode1</li>
                <li><i>Description: </i>This Call for placing return order without order information only with consumer information.</li>
            </ul>
            <h2 class="h2 title toc-headings">Call Details</h2>
            <table cellspacing="0" cellpadding="0" border="0">
                <tbody>
                    <tr>
                        <td nowrap="">
                            <p><strong>Field Name</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Sample Value</strong></p>
                        </td>
                        <td nowrap="">
                          <p><strong>Optional</strong></p>
                        </td>
                        <td>
                            <p><strong>Description</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Data Type</strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ConsumerId</p>
                        </td>
                        <td nowrap="">
                            <p>101</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>ID of the consumer Alpha numeric Length 25</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td  nowrap="">
                            <p>ConsumerName1</p>
                        </td>
                        <td nowrap="">
                            <p>HARVEY NICHOLS DIST.CENTRE -C</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Name of the Consumer Length 35</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td  nowrap="">
                            <p>ConsumerName2</p>
                        </td>
                        <td nowrap="">
                            <p></p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>Length 35</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td  nowrap="">
                            <p>ConsumerEmail</p>
                        </td>
                        <td nowrap="">
                            <p>abc@apoyar.net</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Email address of the consumer Length 256</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td  nowrap="">
                            <p>ConsumerEmail2</p>
                        </td>
                        <td nowrap="">
                            <p>abc@apoyar.net</p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>Email address of the consumer Length 256</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ConsumerShipStreet1</p>
                        </td>
                        <td nowrap="">
                            <p>DIMENSION LILIPUT</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Consumer Street 1 Length 35</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ConsumerFromShipHouseNumber</p>
                        </td>
                        <td nowrap="">
                            <p>1-2-3</p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>Consumer House No Length 5</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ConsumerFromShipPostalCode</p>
                        </td>
                        <td nowrap="">
                            <p>1030</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Consumer Postal Code Length 10</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ConsumerFromShipCity</p>
                        </td>
                        <td nowrap="">
                            <p>NORTHAMPTON</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Consumer City Length 35</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ConsumerShipState</p>
                        </td>
                        <td nowrap="">
                            <p>GB</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Consumer State Length 35</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ConsumerFromShipCountry</p>
                        </td>
                        <td nowrap="">
                            <p>GB</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>User will select a Country from the options given. To get the options see API Call “GetAllActiveCountriesbyCustomerid” field CountryCode.</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>CarrierId</p>
                        </td>
                        <td nowrap="">
                            <p>1</p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>User will select a Carrier from the options given. To get the options see API Call “GetAllCarriers” field PKCarrierId. If not specified, details from preferred Carrier settings will be used.</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>FKCustomerId</p>
                        </td>
                        <td nowrap="">
                            <p>apoyartest</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Customerid Length 255 numeric</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>CustomerName</p>
                        </td>
                        <td nowrap="">
                            <p>True Religion</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>CustomerName Length 35</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ShipFromWarehouseId</p>
                        </td>
                        <td nowrap="">
                            <p>ATPOST123</p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>User will select a Country from the options given. To get the options see API Call “GetBMCarriersbyCustomerid” field WarehouseId. If not specified, details from preferred Carrier settings will be used.</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>CarrierName</p>
                        </td>
                        <td nowrap="">
                            <p>XYZ</p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td >
                            <p>User will select a Carrier from the options given. To get the options see API Call “GetBMCarriersbyCustomerid” field CarrierName. If not specified, details from preferred Carrier settings will be used.</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Mode</p>
                        </td>
                        <td nowrap="">
                            <p>1</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Send mode as 1</p>
                        </td>
                        <td nowrap="">
                            <p>Integer</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>BccEmail</p>
                        </td>
                        <td nowrap="">
                            <p>x@x.com</p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>Customer Email</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>OrderId</p>
                        </td>
                        <td nowrap="">
                            <p>89898989</p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>Orderid</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
					<tr>
                        <td nowrap="">
                            <p>SystemOption</p>
                        </td>
                        <td nowrap="">
                            <p>RITROV BE</p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>Length 50</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
					<tr>
                        <td nowrap="">
                            <p>Reference1</p>
                        </td>
                        <td nowrap="">
                            <p>RMAID</p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>Customer RMAID length 100</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
					<tr>
                        <td nowrap="">
                            <p>Reference2</p>
                        </td>
                        <td nowrap="">
                            <p></p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>Reference2 length 100</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
					<tr>
                        <td nowrap="">
                            <p>Reference3</p>
                        </td>
                        <td nowrap="">
                            <p></p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>Reference3 length 100</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
					<tr>
                        <td nowrap="">
                            <p>Reference4</p>
                        </td>
                        <td nowrap="">
                            <p></p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>Reference4 length 100</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h2 class="h2 title toc-headings">Request example</h2>
            <table cellspacing="0" cellpadding="0" border="0">
                <tbody>
                    <tr>
                        <td nowrap="">
                            <p><strong>Location</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>URL</strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Sandbox URL</p>
                        </td>
                        <td nowrap="">
                            <p>http://api.bleckmann.apoyar.eu/api/returnorder/PostMode1</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Live URL</p>
                        </td>
                        <td nowrap="">
                            <p>http://returns.bleckmann.com:81/BMAPI/BleckmannApi/api/returnorder/PostMode1</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h2 class="h2 title toc-headings">Request Parameters as JSON</h2>
            <div class="geshifilter">
                <pre style="border-left:0px;">
                    {
                        "ConsumerName1":"Sriram",
                        "ConsumerEmail":"sriramk@apoyar.eu",
                        "ConsumerShipStreet1":"Wacholderweg",
                        "ConsumerFromShipHouseNumber":"52a",
                        "ConsumerFromShipPostalCode":"26133",
                        "ConsumerFromShipCity":"OLDENBURG",
                        "ConsumerShipState":"DE",
                        "ConsumerFromShipCountry":"DE",
                        "CarrierId":"4",
                        "FKCustomerId":"LAUNATHL",
                        "ShipFromWarehouseId": "AE",
                        "CarrierName":"DHL",
                        "Mode":1,
                        "OrderId":"89898989",
                        "CustomerName":"Supergroup",
			"SystemOption":"RITROV BE",
			"Reference1":"RMAID",
			"Reference2":"",
			"Reference3":"",
			"Reference4":""
                    }
                </pre>
            </div>
            <h2 class="h2 title toc-headings">Json Response</h2>

            <div class="geshifilter">
                <h3>Status=1000: Return order created but Return Label not Generated</h3>
                <pre style="border-left:0px;">
                    {
                    "Status":"1000",
                    "Messages":"Error Message",
                    "Id":"ReturnorderId"
                    }

                    HttpStatusCode BadRequest 400.
                </pre>
            </div>
            <div class="geshifilter">
                <h3>Status=2000: Return order created and Return Label generated</h3>
                <pre style="border-left:0px;">
{
"Status": "2000",
"Messages": "Successfully Return Order Created",
"Id": "355333294",
"TrackingNumber": "545334014026",
"TrackingUrl": "https://nolp.dhl.de/nextt-online-public/set_identcodes.do?lang=en&idc=545334014026&rfn=&extendedSearch=true",
"LabelUrl": "http://api.bleckmann.apoyar.eu/Labels/LAUNATHL/DHL/355333294.pdf"
}
HttpStatusCode OK 200.
                </pre>
            </div>
            <div class="geshifilter">
                <h3>Status=0: Return order NOT created and Return Label NOT Generated</h3>
                <pre style="border-left:0px;">
                    {
                    "Status":"0",
                    "Messages":"Error Message"
                    }

                    HttpStatusCode BadRequest 400.
                </pre>
            </div>
          </div>

        </div>
        <div class="content">
            <div>
                <div class="toc-item-anchor"><a name="mode2"></a></div>
                <h2 class="h2 title toc-headings" style="color:#cc1543;">Operation Mode 2</h2>
            </div>
            <div class="toc-item-anchor"><a name="GetBMAllOrdersbyid"></a></div>
            <h2 class="h2 title toc-headings">GetBMAllOrdersbyid</h2>
            <ul class="details">
                <li><i>URL: </i>http://<<baseurl>>/api/Order/GetBMAllOrdersbyid</li>
                <li><i>Description: </i>This call is used to get Order and Orderlines by ConsumerEmail and Orderid from this response pick up the Data(How to use Mention in Below Table of PostBMReturnOrder for fields) as this will be used in the subsequesnt API “PostBMReturnOrder” and from that Data ConsumerShipCountry and FKCustomerID field to be used in “GetBMCarriersbyCustomerid”</li>
            </ul>
            <h2 class="h2 title toc-headings">Method</h2>
            <table cellspacing="1" cellpadding="1" border="1">
                <thead>
                    <tr>
                        <th scope="col"><strong>Method</strong></th>
                        <th scope="col"><strong>Description</strong></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>GetBMAllOrdersbyId</td>
                        <td>Gets all Order and Orderlines by ConsumerEmail and Orderid&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    </tr>
                </tbody>
            </table>
            <h2 class="h2 title toc-headings">Call Details</h2>
            <table cellspacing="0" cellpadding="0" border="0">
                <tbody>
                    <tr>
                        <td nowrap="">
                            <p><strong>Field Name</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Sample Value</strong></p>
                        </td>
                        <td nowrap="">
                          <p><strong>Optional</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Description</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Data Type</strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Email</p>
                        </td>
                        <td nowrap="">
                            <p>x@x.com</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td nowrap="">
                            <p>Provide Valid Email</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>OrderId</p>
                        </td>
                        <td nowrap="">
                            <p>411400061002</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td nowrap="">
                            <p>AlphaNumeric</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>CustomerId</p>
                        </td>
                        <td nowrap="">
                            <p>apoyartest</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td nowrap="">
                            <p>AlphaNumeric</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h2 class="h2 title toc-headings">Request example</h2>
            <table cellspacing="0" cellpadding="0" border="0">
                <tbody>
                    <tr>
                        <td nowrap="">
                            <p><strong>Location</strong></p>
                        </td>
                        <td >
                            <p><strong>URL</strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Sandbox URL</p>
                        </td>
                        <td >
                            <p>http://api.bleckmann.apoyar.eu/api/Order/GetBMAllOrdersbyid?Email=x@x.com&Orderid=411400061002&Customerid=test</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Live URL</p>
                        </td>
                        <td >
                            <p>http://returns.bleckmann.com:81/BMAPI/BleckmannApi/api/Order/GetBMAllOrdersbyid?Email=x@x.com&Orderid=411400061002&Customerid=apoyartest</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h2 class="h2 title toc-headings">Response example</h2>
            <div class="geshifilter">
                <pre style="border-left:0px;">
                {
                    Status: -1,
                    ShipmentId: "411400061002",
                    FKCustomerID: "",
                    Consumerid: "HA0006",
                    ConsumerEmail: "x@x.com",
                    ShipFromWarehouseId: "KHTRUEFC",
                    Source: "RP",
                    OrderType: "NIET-MP",
                    OrderId: "411400061002",
                    ConsumerPhoneNumber: "1231231231",
                    ShippedDate: "2013-04-19T15:00:50",
                    DeliveyDate: "1800-01-01T00:00:00",
                    MaxReturnDays: -1,
                    ConsumerName1: "HARRODS DATA ENTRY DEPT. DISTR",
                    ConsumerShipStreet1: "MILL LANE",
                    ConsumerShipStreet2: "/",
                    ConsumerShipHouseNumber: "",
                    ConsumerShipPostalCode: "RG19 4AL",
                    ConsumerShipCity: "THATCHAM - BERKSHIRE",
                    ConsumerShipState: "GB",
                    ConsumerShipCountry: "GBR",
                    ConsumerLanguage: "",
                    TotalValue: 0,
                    BMOrderLine: [
                        {
                            Status: 10,
                            WarehouseId: "KHTRUEFC",
                            ShipmentLineId: 25005,
                            ShipmentId: null,
                            OrderId: "411400061002",
                            OrderlineID: 25005,
                            SKU: "SU13M1513-4643.XL",
                            StyleDescription: "AMERICAN HORSESHOE TEE",
                            ColourDescription: "RUGBY BLUE",
                            SizeDescription: "XL",
                            EANBARCODE: "887150756991",
                            HTS: "",
                            Origine: "",
                            Price: 20.9,
                            ProductCurrency: "GBP",
                            UnitWeight: 0.001,
                            UnitOfMeasure: "STUKS",
                            HazmatCode: "",
                            QtyShipped: 5,
                            TotalLineAmount: 0
                        },
                        {
                            Status: 10,
                            WarehouseId: "KHTRUEFC",
                            ShipmentLineId: 25002,
                            ShipmentId: null,
                            OrderId: "411400061002",
                            OrderlineID: 25002,
                            SKU: "SU13M1513-4643.S",
                            StyleDescription: "AMERICAN HORSESHOE TEE",
                            ColourDescription: "RUGBY BLUE",
                            SizeDescription: "S",
                            EANBARCODE: "887150756960",
                            HTS: "",
                            Origine: "",
                            Price: 20.9,
                            ProductCurrency: "GBP",
                            UnitWeight: 0.001,
                            UnitOfMeasure: "STUKS",
                            HazmatCode: "",
                            QtyShipped: 4,
                            TotalLineAmount: 0
                        },
                        {
                            Status: 10,
                            WarehouseId: "KHTRUEFC",
                            ShipmentLineId: 25003,
                            ShipmentId: null,
                            OrderId: "411400061002",
                            OrderlineID: 25003,
                            SKU: "SU13M1513-4643.M",
                            StyleDescription: "AMERICAN HORSESHOE TEE",
                            ColourDescription: "RUGBY BLUE",
                            SizeDescription: "M",
                            EANBARCODE: "887150756977",
                            HTS: "",
                            Origine: "",
                            Price: 20.9,
                            ProductCurrency: "GBP",
                            UnitWeight: 0.001,
                            UnitOfMeasure: "STUKS",
                            HazmatCode: "",
                            QtyShipped: 6,
                            TotalLineAmount: 0
                        }
                    ]
                }

                </pre>
            </div>
            <div class="toc-item-anchor"><a name="GetAllReturnReasonsbyCustomerid"></a></div>
            <h2 class="h2 title toc-headings">GetAllReturnReasonsbyCustomerid</h2>
            <ul class="details">
                <li><i>URL: </i>http://<<baseurl>>/api/returnreason/GetAllReturnReasonsbyCustomerid</li>
                <li><i>Description: </i>This call is used to get Returnreasons by Customer ID and from this response pick up the values for  PKReasonID as these values will be used in “PostBMReturnOrder.</li>
            </ul>
            <h2 class="h2 title toc-headings">Method</h2>
            <table cellspacing="1" cellpadding="1" border="1">
                <thead>
                    <tr>
                        <th scope="col"><strong>Method</strong></th>
                        <th scope="col"><strong>Description</strong></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>GetAllReturnReasonsbyCustomerId</td>
                        <td>Get Returnreaons for customer language wise and with sequence no by Customer Id&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    </tr>
                </tbody>
            </table>
            <h2 class="h2 title toc-headings">Call Details</h2>
            <table cellspacing="0" cellpadding="0" border="0">
                <tbody>
                    <tr>
                        <td nowrap="">
                            <p><strong>Field Name</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Sample Value</strong></p>
                        </td>
                        <td nowrap="">
                          <p><strong>Optional</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Description</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Data Type</strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>CustomerId</p>
                        </td>
                        <td nowrap="">
                            <p>apoyartest</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td nowrap="">
                            <p>Take value from API Call “GetBMAllOrdersbyid” field FKCustomerID</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h2 class="h2 title toc-headings">Request example</h2>
            <table cellspacing="0" cellpadding="0" border="0">
                <tbody>
                    <tr>
                        <td nowrap="">
                            <p><strong>Location</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>URL</strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Sandbox URL</p>
                        </td>
                        <td nowrap="">
                            <p>http://api.bleckmann.apoyar.eu/api/returnreason/GetAllReturnReasonsbyCustomerid?Customerid=test</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Live URL</p>
                        </td>
                        <td nowrap="">
                            <p>http://returns.bleckmann.com:81/BMAPI/BleckmannApi/api/returnreason/GetAllReturnReasonsbyCustomerid?Customerid=apoyartest</p>
                        </td>
                    </tr>
                </tbody>
            </table>

            <h2 class="h2 title toc-headings">Response example</h2>
            <div class="geshifilter">
                <pre style="border-left:0px;">
                    [
                      [
                        {
                          "PKReasonID": 84,
                          "Reason": "The product did not match its description1",
                          "FKCustomerID": "apoyartest",
                          "IsActive": true,
                          "FkLanguageid": 1,
                          "Uid": "104",
                          "LanguageName": "English",
                          "Sequenceno": 4
                        },
                        {
                          "PKReasonID": 85,
                          "Reason": "Le produit ne correspond &#224; sa description",
                          "FKCustomerID": "apoyartest",
                          "IsActive": true,
                          "FkLanguageid": 2,
                          "Uid": "104",
                          "LanguageName": "French",
                          "Sequenceno": 4
                        },
                        {
                          "PKReasonID": 86,
                          "Reason": "Het product komt niet overeen de beschrijving",
                          "FKCustomerID": "apoyartest",
                          "IsActive": true,
                          "FkLanguageid": 3,
                          "Uid": "104",
                          "LanguageName": "Dutch",
                          "Sequenceno": 4
                        }
                      ],
                      [
                        {
                          "PKReasonID": 87,
                          "Reason": "Incorrect Product or Size Ordered",
                          "FKCustomerID": "apoyartest",
                          "IsActive": true,
                          "FkLanguageid": 1,
                          "Uid": "105",
                          "LanguageName": "English",
                          "Sequenceno": 7
                        },
                        {
                          "PKReasonID": 88,
                          "Reason": " Produit ou Taille incorrecte Ordonn&#233;",
                          "FKCustomerID": "apoyartest",
                          "IsActive": true,
                          "FkLanguageid": 2,
                          "Uid": "105",
                          "LanguageName": "French",
                          "Sequenceno": 7
                        },
                        {
                          "PKReasonID": 89,
                          "Reason": " Onjuiste product of maat besteld",
                          "FKCustomerID": "apoyartest",
                          "IsActive": true,
                          "FkLanguageid": 3,
                          "Uid": "105",
                          "LanguageName": "Dutch",
                          "Sequenceno": 7
                        }
                      ]
                    ]
                </pre>
            </div>

            <div class="toc-item-anchor"><a name="GetBMCarriersbyCustomerid"></a></div>
            <h2 class="h2 title toc-headings">GetBMCarriersbyCustomerid</h2>
            <ul class="details">
                <li><i>URL: </i>http://<<baseurl>>/api/Carrier/GetBMCarriersbyCustomerid</li>
                <li><i>Description: </i>This call is used to get Carriers by Customer ID and selected country (which you get from above API call) and from this response pick up the values for  PKCarrierid, Carriername, Warehouseid as these values will be used in “PostMode1”.</li>
            </ul>
            <h2 class="h2 title toc-headings">Method</h2>
            <table cellspacing="1" cellpadding="1" border="1">
                <thead>
                    <tr>
                        <th scope="col"><strong>Method</strong></th>
                        <th scope="col"><strong>Description</strong></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>GetBMCarriersbyCustomerId</td>
                        <td>Get Carriers by Customer Id and Country Code&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    </tr>
                </tbody>
            </table>
            <h2 class="h2 title toc-headings">Call Details</h2>
            <table cellspacing="0" cellpadding="0" border="0">
                <tbody>
                    <tr>
                        <td nowrap="">
                            <p><strong>Field Name</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Sample Value</strong></p>
                        </td>
                        <td nowrap="">
                          <p><strong>Optional</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Description</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Data Type</strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>CountryCode</p>
                        </td>
                        <td nowrap="">
                            <p>GB</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td nowrap="">
                            <p>Take value from API Call “GetBMAllOrdersbyid” field ConsumerShipCountry</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>CustomerId</p>
                        </td>
                        <td nowrap="">
                            <p>apoyartest</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td nowrap="">
                            <p>Take value from API Call “GetBMAllOrdersbyid” field FKCustomerID</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h2 class="h2 title toc-headings">Request example</h2>
            <table cellspacing="0" cellpadding="0" border="0">
                <tbody>
                    <tr>
                        <td nowrap="">
                            <p><strong>Location</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>URL</strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Sandbox URL</p>
                        </td>
                        <td nowrap="">
                            <p>http://api.bleckmann.apoyar.eu/api/Carrier/GetBMCarriersbyCustomerid?Customerid=test&CountryCode=GB</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Live URL</p>
                        </td>
                        <td nowrap="">
                            <p>http://returns.bleckmann.com:81/BMAPI/BleckmannApi/api/Carrier/GetBMCarriersbyCustomerid?Customerid=apoyartest&CountryCode=GB</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h2 class="h2 title toc-headings">Response example</h2>
            <div class="geshifilter">
                <pre style="border-left:0px;">
                    [
                      {
                        "PKCarrierID": 1,
                        "CarrierName": "DHL",
                        "Isactive": true,
                        "WarehouseId": "KHTRUEFC",
                        "GlobalSetting": null,
                        "CarrierSetting": null
                      },
                      {
                        "PKCarrierID": 3,
                        "CarrierName": "Royal Mail",
                        "Isactive": true,
                        "WarehouseId": "KHTRUEFC",
                        "GlobalSetting": null,
                        "CarrierSetting": null
                      },
                      {
                        "PKCarrierID": 3,
                        "CarrierName": "Royal Mail",
                        "Isactive": true,
                        "WarehouseId": "KRUISHOUTEM1",
                        "GlobalSetting": null,
                        "CarrierSetting": null
                      },
                      {
                        "PKCarrierID": 5,
                        "CarrierName": "UPS",
                        "Isactive": true,
                        "WarehouseId": "KHTRUEFC",
                        "GlobalSetting": null,
                        "CarrierSetting": null
                      }
                    ]
                </pre>
            </div>
            <div class="toc-item-anchor"><a name="PostBMReturnOrder"></a></div>
            <h2 class="h2 title toc-headings">PostBMReturnOrder</h2>
            <ul class="details">
                <li><i>URL: </i>http://<<baseurl>>/api/returnorder/PostBMReturnOrder</li>
                <li><i>Description: </i>This Call for placing return order with order information.</li>
            </ul>

            <h2 class="h2 title toc-headings">Call Details</h2>
            <table cellspacing="0" cellpadding="0" border="0">
                <tbody>
                    <tr>
                        <td nowrap="">
                            <p><strong>Field Name</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Sample Value</strong></p>
                        </td>
                        <td nowrap="">
                          <p><strong>Optional</strong></p>
                        </td>
                        <td>
                            <p><strong>Description</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Data Type</strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ConsumerId</p>
                        </td>
                        <td nowrap="">
                            <p>101</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” field Consumerid ID of the consumer Alpha numeric Length 25</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td  nowrap="">
                            <p>ConsumerName1</p>
                        </td>
                        <td nowrap="">
                            <p>HARVEY NICHOLS DIST.CENTRE -C</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” field ConsumerName1 Name of the Consumer Length 35</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td  nowrap="">
                            <p>ConsumerName2</p>
                        </td>
                        <td nowrap="">
                            <p></p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” field ConsumerName2 Length 35</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td  nowrap="">
                            <p>ConsumerEmail</p>
                        </td>
                        <td nowrap="">
                            <p>abc@apoyar.net</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” field ConsumerEmail Email address of the consumer Length 256</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td  nowrap="">
                            <p>ConsumerEmail2</p>
                        </td>
                        <td nowrap="">
                            <p>abc@apoyar.net</p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>This is user Defined Email address of the consumer Length 256</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ConsumerShipStreet1</p>
                        </td>
                        <td nowrap="">
                            <p>DIMENSION LILIPUT</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” field ConsumerShipStreet1 Consumer Street 1 Length 35</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ConsumerShipStreet2</p>
                        </td>
                        <td nowrap="">
                            <p>DIMENSION</p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” field ConsumerShipStreet2 Consumer Street 2 Length 35</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ConsumerShipStreet3</p>
                        </td>
                        <td nowrap="">
                            <p>DIMENSION</p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” field ConsumerShipStreet3 Consumer Street 3 Length 35</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>

                    <tr>
                        <td nowrap="">
                            <p>ConsumerPhoneNumber</p>
                        </td>
                        <td nowrap="">
                            <p>1234567891</p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” field ConsumerPhoneNumber Consumer Phone Length 15</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ConsumerFromShipHouseNumber</p>
                        </td>
                        <td nowrap="">
                            <p>1-2-3</p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” field ConsumerFromShipHouseNumber Consumer House No Length 15</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ConsumerFromShipPostalCode</p>
                        </td>
                        <td nowrap="">
                            <p>1030</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” field ConsumerShipPostalCode Consumer Postal Code Length 10</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ConsumerFromShipCity</p>
                        </td>
                        <td nowrap="">
                            <p>NORTHAMPTON</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” field ConsumerFromShipCity Consumer City Length 35</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ConsumerShipState</p>
                        </td>
                        <td nowrap="">
                            <p>GB</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” field ConsumerShipState Consumer State Length 35</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ConsumerFromShipCountry</p>
                        </td>
                        <td nowrap="">
                            <p>GB</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>User will select a Country from the options given. To get the options see API Call “GetAllActiveCountriesbyCustomerid” field CountryCode</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>OrderId</p>
                        </td>
                        <td nowrap="">
                            <p>410009352004</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” field OrderId Orderid Length 50</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Ordertype</p>
                        </td>
                        <td nowrap="">
                            <p>MUPS STD</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” field OrderType Ordertype Length 20</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ReturnOrderTotalRefundAmount</p>
                        </td>
                        <td nowrap="">
                            <p>74.00</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Make it total of Returnorder items selected Amount in Decimal</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Source</p>
                        </td>
                        <td nowrap="">
                            <p></p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” field Source Length 20</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ShipmentId</p>
                        </td>
                        <td nowrap="">
                            <p>410009352004</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” field ShipmentId Length 20</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>

                    <tr>
                        <td nowrap="">
                            <p>CarrierId</p>
                        </td>
                        <td nowrap="">
                            <p>1</p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>User will select a Country from the options given. To get the options see API Call “GetAllCarriers” field PKCarrierId. If not specified, details from preferred Carrier settings will be used.</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>FKCustomerId</p>
                        </td>
                        <td nowrap="">
                            <p>apoyartest</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” field FKCustomerID Customerid Length 255 numeric</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>CustomerName</p>
                        </td>
                        <td nowrap="">
                            <p>True Religion</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>CustomerName Length 35</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ShipFromWarehouseId</p>
                        </td>
                        <td nowrap="">
                            <p>ATPOST123</p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>User will select a Country from the options given. To get the options see API Call “GetBMCarriersbyCustomerid” field WarehouseId. If not specified, details from preferred Carrier settings will be used.</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>CarrierName</p>
                        </td>
                        <td nowrap="">
                            <p>XYZ</p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td >
                            <p>User will select a Country from the options given. To get the options see API Call “GetBMCarriersbyCustomerid” field CarrierName. If not specified, details from preferred Carrier settings will be used.</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Mode</p>
                        </td>
                        <td nowrap="">
                            <p>2</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Send mode as 2</p>
                        </td>
                        <td nowrap="">
                            <p>Integer</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>BccEmail</p>
                        </td>
                        <td nowrap="">
                            <p>x@x.com</p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>Customer Email</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Apoyar</p>
                        </td>
                        <td nowrap="">
                            <p>ahgsdhfagf</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>‘GetBMAllOrdersbyId’ you will get the token in header with field ‘apoyar’ in this function send in header to respective api ‘PostBMReturnOrder’</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>LineId</p>
                        </td>
                        <td nowrap="">
                            <p>1</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” Array BMOrderLine selected orderline field OrderlineID</p>
                        </td>
                        <td nowrap="">
                            <p>Integer</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>OrderId</p>
                        </td>
                        <td nowrap="">
                            <p>410009352004</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” Array BMOrderLine selected orderline field OrderId Alphanumeric Length 50</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ShipmentId</p>
                        </td>
                        <td nowrap="">
                            <p>410009352004</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” Array BMOrderLine selected orderline field ShipmentId Alphanumeric Length 20</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>SKU</p>
                        </td>
                        <td nowrap="">
                            <p>MC907XQ0-COKM.32</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” Array BMOrderLine selected orderline field SKU Alphanumeric Length 50</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>

                    <tr>
                        <td nowrap="">
                            <p>EanBarcode</p>
                        </td>
                        <td nowrap="">
                            <p>889347388510</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” Array BMOrderLine selected orderline field EANBARCODE Alphanumeric Length 14</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Price</p>
                        </td>
                        <td nowrap="">
                            <p>22.0</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” Array BMOrderLine selected orderline field Price Decimal</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ProductCurrency</p>
                        </td>
                        <td nowrap="">
                            <p>GBP</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” Array BMOrderLine selected orderline field ProductCurrency Length 3</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>QtyReturned</p>
                        </td>
                        <td nowrap="">
                            <p>3</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Selected Quantity</p>
                        </td>
                        <td nowrap="">
                            <p>Integer</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ReturnReasonId</p>
                        </td>
                        <td nowrap="">
                            <p>1</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Selected Return Reason ID</p>
                        </td>
                        <td nowrap="">
                            <p>Integer</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>TotalLineAmount</p>
                        </td>
                        <td nowrap="">
                            <p>74.0</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Price multiply with Selected Quantity Count</p>
                        </td>
                        <td nowrap="">
                            <p>Decimal</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Status</p>
                        </td>
                        <td nowrap="">
                            <p>1</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Send Default as 1</p>
                        </td>
                        <td nowrap="">
                            <p>Integer</p>
                        </td>
                    </tr>
                </tbody>
            </table>

            <h2 class="h2 title toc-headings">Request example</h2>
            <table cellspacing="0" cellpadding="0" border="0">
                <tbody>
                    <tr>
                        <td nowrap="">
                            <p><strong>Location</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>URL</strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Sandbox URL</p>
                        </td>
                        <td nowrap="">
                            <p>http://api.bleckmann.apoyar.eu/api/returnorder/PostBMReturnOrder</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Live URL</p>
                        </td>
                        <td nowrap="">
                            <p>http://returns.bleckmann.com:81/BMAPI/BleckmannApi/api/returnorder/PostBMReturnOrder</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h2 class="h2 title toc-headings">Request Parameters as JSON</h2>
            <div class="geshifilter">
                Sample token in Request header - Apoyar: 92600f29-10d0-4c5f-b13a-1dbdee2572d4
                <pre style="border-left:0px;">
                    {
                    "CarrierId":19,
                    "CarrierName":"Fastway",
                    "ConsumerEmail":"x@x.com",
                    "ConsumerEmail2":"",
                    "ConsumerFromShipCity":"MIDDLESBOROUGH",
                    "ConsumerFromShipCountry":"IRL",
                    "ConsumerFromShipHouseNumber":"",
                    "ConsumerFromShipPostalCode":"A65 F4E2",
                    "ConsumerId":101,
                    "ConsumerName1":"PSYCHE LIMITED",
                    "ConsumerShipStreet1":"175-187 LINTHORPE ROAD",
                    "ConsumerPhoneNumber":"1231231231",
                    "ConsumerShipState":"IR",
                    "ConsumerShipStreet2":"/",
                    "FKCustomerId":"TRUEFC",
                    "OrderId":"410009352004",
                    "Ordertype":"MUPS STD",
                    "ReturnOrderTotalRefundAmount":"74.00",
                    "ShipFromWarehouseId":"KHTRUEFC",
                    "ShipmentId":"410009352004",
                    "Source":"RP",
                    "Status":1,
                    "Mode":2,
                    "CustomerName":"TrueReligion",
                    "BccEmail":"x@x.com",
                    "ReturnOrderLine":[{
                        "EanBarcode":"889347388510",
                        "LineId":1,
                        "OrderId":"410009352004",
                        "Price":"74.00",
                        "ProductCurrency":"GBP",
                        "QtyReturned":1,
                        "ReturnReasonId":108,
                        "SKU":"MC907XQ0-COKM.32",
                        "ShipmentId":"410009352004",
                        "Status":1,
                        "TotalLineAmount":74
                        }]
                    }

                </pre>
            </div>
            <h2 class="h2 title toc-headings">Json Response</h2>

            <div class="geshifilter">
                <h3>Status=1000: Return order created but Return Label not Generated</h3>
                <pre style="border-left:0px;">
                    {
                    "Status":"1000",
                    "Messages":"Error Message",
                    "Id":"ReturnorderId"
                    }

                    HttpStatusCode BadRequest 400.
                </pre>
            </div>
            <div class="geshifilter">
                <h3>Status=2000: Return order created and Return Label generated</h3>
                <pre style="border-left:0px;">
		{
		 "Status": "2000",
		 "Messages": "Successfully Return Order Created",
		 "Id": "452653297",
		 "TrackingNumber": "20000000032",
		 "TrackingUrl": "http://fastway.ie/courier-services/track-your-parcel?l=20000000032",
		 "LabelUrl": "http://api.bleckmann.apoyar.eu/Labels/TRUEFC/Fastway/452653297.pdf"
		}
		
		HttpStatusCode OK 200.
                </pre>
            </div>
            <div class="geshifilter">
                <h3>Status=0: Return order NOT created and Return Label NOT Generated</h3>
                <pre style="border-left:0px;">
                    {
                    "Status":"0",
                    "Messages":"Error Message"
                    }

                    HttpStatusCode BadRequest 400.
                </pre>
            </div>
        </div>
        <div class="content">
            <div>
            <div class="toc-item-anchor"><a name="mode3"></a></div>
            <h2 class="h2 title toc-headings" style="color:#cc1543;">Operation Mode 3</h2>

            <div class="toc-item-anchor"><a name="GetAllActiveCountriesbyCustomerid3"></a></div>
            <h2 class="h2 title toc-headings">GetAllActiveCountriesbyCustomerid</h2>
            <ul class="details">
                <li><i>URL: </i>http://<<baseurl>>/api/Country/GetAllActiveCountriesbyCustomerid</li>
                <li><i>Description: </i>This call is used to get Countries by Customer ID and from this response pick up the CountryCode as this will be used in the subsequesnt API calls “GetBMCarriersbyCustomerid” and “PostMode3”.</li>
            </ul>

            <h2 class="h2 title toc-headings">Method</h2>
            <table cellspacing="1" cellpadding="1" border="1">
                <thead>
                    <tr>
                        <th scope="col"><strong>Method</strong></th>
                        <th scope="col"><strong>Description</strong></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>GetAllActiveCountriesbyCustomerId</td>
                        <td>Gets all active countries based on customerid provided&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    </tr>
                </tbody>
            </table>
            <h2 class="h2 title toc-headings">Call Details</h2>
            <table cellspacing="0" cellpadding="0" border="0">
                <tbody>
                    <tr>
                        <td nowrap="">
                            <p><strong>Field Name</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Sample Value</strong></p>
                        </td>
                        <td nowrap="">
                          <p><strong>Optional</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Description</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Data Type</strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>CustomerId</p>
                        </td>
                        <td nowrap="">
                            <p>apoyartest</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td nowrap="">
                            <p>Alpha NUmeric</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h2 class="h2 title toc-headings">Request example</h2>
            <table cellspacing="0" cellpadding="0" border="0">
                <tbody>
                    <tr>
                        <td nowrap="">
                            <p><strong>Location</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>URL</strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Sandbox URL</p>
                        </td>
                        <td nowrap="">
                            <p>http://api.bleckmann.apoyar.eu/api/Country/GetAllActiveCountriesbyCustomerid?Customerid=test</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Live URL</p>
                        </td>
                        <td nowrap="">
                            <p>http://returns.bleckmann.com:81/BMAPI/BleckmannApi/api/Country/GetAllActiveCountriesbyCustomerid?Customerid=apoyartest</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h2 class="h2 title toc-headings">Response example</h2>
            <div class="geshifilter">
                <pre style="border-left:0px;">
                    [{
                        "PKCountryId": 2,
                        "CountryName": "ALBANIA",
                        "CountryCode": "ALB",
                        "IsActive": true
                      },
                      {
                        "PKCountryId": 14,
                        "CountryName": "AUSTRIA",
                        "CountryCode": "AUT",
                        "IsActive": true
                      },
                      {
                        "PKCountryId": 21,
                        "CountryName": "BELGIUM",
                        "CountryCode": "BEL",
                        "IsActive": true
                      },
                      {
                        "PKCountryId": 73,
                        "CountryName": "FRANCE",
                        "CountryCode": "FRA",
                        "IsActive": true
                      },
                      {
                        "PKCountryId": 80,
                        "CountryName": "GERMANY",
                        "CountryCode": "DEU",
                        "IsActive": true
                      },
                      {
                        "PKCountryId": 103,
                        "CountryName": "IRELAND",
                        "CountryCode": "IRL",
                        "IsActive": true
                      },
                      {
                        "PKCountryId": 105,
                        "CountryName": "ITALY",
                        "CountryCode": "ITA",
                        "IsActive": true
                      },
                      {
                        "PKCountryId": 124,
                        "CountryName": "LUXEMBOURG",
                        "CountryCode": "LUX",
                        "IsActive": true
                      },
                      {
                        "PKCountryId": 150,
                        "CountryName": "NETHERLANDS",
                        "CountryCode": "NLD",
                        "IsActive": true
                      },
                      {
                        "PKCountryId": 225,
                        "CountryName": "UNITED KINGDOM",
                        "CountryCode": "GBR",
                        "IsActive": true
                      }
                    ]
                </pre>
            </div>
            <div class="toc-item-anchor">
                <a name="GetBMCarriersbyCustomerid3"></a>
            </div>
            <h2 class="h2 title toc-headings toc-headings">GetBMCarriersbyCustomerid</h2>
            <ul class="details">
                <li><i>URL: </i>http://<<baseurl>>/api/Carrier/GetBMCarriersbyCustomerid</li>
                <li><i>Description: </i>This call is used to get Carriers by Customer ID and selected country (which you get from above API call) and from this response pick up the values for  PKCarrierid, Carriername, Warehouseid as these values will be used in “PostMode1”.</li>
            </ul>     
            <h2 class="h2 title toc-headings">Method</h2>
            <table cellspacing="1" cellpadding="1" border="1">
                <thead>
                    <tr>
                        <th scope="col"><strong>Method</strong></th>
                        <th scope="col"><strong>Description</strong></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>GetBMCarriersbyCustomerId</td>
                        <td>Get Carriers by Customer Id and Country Code&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    </tr>
                </tbody>
            </table>
            <h2 class="h2 title toc-headings">Call Details</h2>
            <table cellspacing="0" cellpadding="0" border="0">
                <tbody>
                    <tr>
                        <td nowrap="">
                            <p><strong>Field Name</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Sample Value</strong></p>
                        </td>
                        <td nowrap="">
                          <p><strong>Optional</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Description</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Data Type</strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>CountryCode</p>
                        </td>
                        <td nowrap="">
                            <p>GB</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td nowrap="">
                            <p>2 Character Code</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>CustomerId</p>
                        </td>
                        <td nowrap="">
                            <p>apoyartest</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td nowrap="">
                            <p>AlphaNumeric</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h2 class="h2 title toc-headings">Request example</h2>
            <table cellspacing="0" cellpadding="0" border="0">
                <tbody>
                    <tr>
                        <td nowrap="">
                            <p><strong>Location</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>URL</strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Sandbox URL</p>
                        </td>
                        <td nowrap="">
                            <p>http://api.bleckmann.apoyar.eu/api/Carrier/GetBMCarriersbyCustomerid?Customerid=test&CountryCode=GB</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Live URL</p>
                        </td>
                        <td nowrap="">
                            <p>http://returns.bleckmann.com:81/BMAPI/BleckmannApi/api/Carrier/GetBMCarriersbyCustomerid?Customerid=apoyartest&CountryCode=GB</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h2 class="h2 title toc-headings">Response example</h2>
            <div class="geshifilter">
                <pre style="border-left:0px;">
                [
                  {
                    "PKCarrierID": 1,
                    "CarrierName": "DHL",
                    "Isactive": true,
                    "WarehouseId": "KHTRUEFC",
                    "GlobalSetting": null,
                    "CarrierSetting": null
                  },
                  {
                    "PKCarrierID": 3,
                    "CarrierName": "Royal Mail",
                    "Isactive": true,
                    "WarehouseId": "KHTRUEFC",
                    "GlobalSetting": null,
                    "CarrierSetting": null
                  },
                  {
                    "PKCarrierID": 3,
                    "CarrierName": "Royal Mail",
                    "Isactive": true,
                    "WarehouseId": "KRUISHOUTEM1",
                    "GlobalSetting": null,
                    "CarrierSetting": null
                  },
                  {
                    "PKCarrierID": 5,
                    "CarrierName": "UPS",
                    "Isactive": true,
                    "WarehouseId": "KHTRUEFC",
                    "GlobalSetting": null,
                    "CarrierSetting": null
                  }
                ]
                </pre>
            </div>
            <div class="toc-item-anchor"><a name="PostMode3"></a></div>
            <h2 class="h2 title toc-headings">PostMode3</h2>
            <ul class="details">
                <li><i>URL: </i>http://<<baseurl>>/api/returnorder/PostMode3</li>
                <li><i>Description: </i>This Call for placing return order without order information only with consumer information by Customer Service User.</li>
            </ul>
            <h2 class="h2 title toc-headings">Call Details</h2>
            <table cellspacing="0" cellpadding="0" border="0">
                <tbody>
                    <tr>
                        <td nowrap="">
                            <p><strong>Field Name</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Sample Value</strong></p>
                        </td>
                        <td nowrap="">
                          <p><strong>Optional</strong></p>
                        </td>
                        <td>
                            <p><strong>Description</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Data Type</strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ConsumerId</p>
                        </td>
                        <td nowrap="">
                            <p>101</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>ID of the consumer Alpha numeric Length 25</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td  nowrap="">
                            <p>ConsumerName1</p>
                        </td>
                        <td nowrap="">
                            <p>HARVEY NICHOLS DIST.CENTRE -C</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Name of the Consumer Length 35</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td  nowrap="">
                            <p>ConsumerName2</p>
                        </td>
                        <td nowrap="">
                            <p></p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>Length 35</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td  nowrap="">
                            <p>ConsumerEmail</p>
                        </td>
                        <td nowrap="">
                            <p>abc@apoyar.net</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Email address of the consumer Length 256</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td  nowrap="">
                            <p>ConsumerEmail2</p>
                        </td>
                        <td nowrap="">
                            <p>abc@apoyar.net</p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>Email address of the consumer Length 256</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ConsumerShipStreet1</p>
                        </td>
                        <td nowrap="">
                            <p>DIMENSION LILIPUT</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Consumer Street 1 Length 35</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ConsumerFromShipHouseNumber</p>
                        </td>
                        <td nowrap="">
                            <p>1-2-3</p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>Consumer House No Length 35</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ConsumerFromShipPostalCode</p>
                        </td>
                        <td nowrap="">
                            <p>1030</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Consumer Postal Code Length 10</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ConsumerFromShipCity</p>
                        </td>
                        <td nowrap="">
                            <p>NORTHAMPTON</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Consumer City Length 35</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ConsumerShipState</p>
                        </td>
                        <td nowrap="">
                            <p>GB</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Consumer State Length 35</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ConsumerFromShipCountry</p>
                        </td>
                        <td nowrap="">
                            <p>GB</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>User will select a Country from the options given. To get the options see API Call “GetAllActiveCountriesbyCustomerid” field CountryCode.</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>CarrierId</p>
                        </td>
                        <td nowrap="">
                            <p>1</p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>User will select a Country from the options given. To get the options see API Call “GetAllCarriers” field PKCarrierId. If not specified, details from preferred Carrier settings will be used.</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>FKCustomerId</p>
                        </td>
                        <td nowrap="">
                            <p>apoyartest</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Customerid Length 255 numeric</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>CustomerName</p>
                        </td>
                        <td nowrap="">
                            <p>True Religion</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>CustomerName Length 35</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ShipFromWarehouseId</p>
                        </td>
                        <td nowrap="">
                            <p>ATPOST123</p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>User will select a Country from the options given. To get the options see API Call “GetBMCarriersbyCustomerid” field WarehouseId. If not specified, details from preferred Carrier settings will be used.</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>CarrierName</p>
                        </td>
                        <td nowrap="">
                            <p>XYZ</p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td >
                            <p>User will select a Country from the options given. To get the options see API Call “GetBMCarriersbyCustomerid” field CarrierName. If not specified, details from preferred Carrier settings will be used.</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Mode</p>
                        </td>
                        <td nowrap="">
                            <p>1</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Send mode as 1</p>
                        </td>
                        <td nowrap="">
                            <p>Integer</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>BccEmail</p>
                        </td>
                        <td nowrap="">
                            <p>x@x.com</p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>Customer Email</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>UserId</p>
                        </td>
                        <td nowrap="">
                            <p>123</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Customer Representative Id</p>
                        </td>
                        <td nowrap="">
                            <p>Integer</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>OrderId</p>
                        </td>
                        <td nowrap="">
                            <p>89898989</p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>OrderId</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
					<tr>
                        <td nowrap="">
                            <p>SystemOption</p>
                        </td>
                        <td nowrap="">
                            <p>RITROV BE</p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>Length 50</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
					<tr>
                        <td nowrap="">
                            <p>Reference1</p>
                        </td>
                        <td nowrap="">
                            <p>RMAID</p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>Customer RMAID Length 100</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
					<tr>
                        <td nowrap="">
                            <p>Reference2</p>
                        </td>
                        <td nowrap="">
                            <p></p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>Reference2 length 100</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
					<tr>
                        <td nowrap="">
                            <p>Reference3</p>
                        </td>
                        <td nowrap="">
                            <p></p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>Reference3 length 100</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
					<tr>
                        <td nowrap="">
                            <p>Reference4</p>
                        </td>
                        <td nowrap="">
                            <p></p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>Reference4 length 100</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
					
                    <tr>
                        <td nowrap="">
                            <p>Apoyar</p>
                        </td>
                        <td nowrap="">
                            <p>‘hjhakjDHKJASD’</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Login user Token “Send in Header”</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h2 class="h2 title toc-headings">Request example</h2>
            <table cellspacing="0" cellpadding="0" border="0">
                <tbody>
                    <tr>
                        <td nowrap="">
                            <p><strong>Location</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>URL</strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Sandbox URL</p>
                        </td>
                        <td nowrap="">
                            <p>http://api.bleckmann.apoyar.eu/api/returnorder/PostMode3</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Live URL</p>
                        </td>
                        <td nowrap="">
                            <p>http://returns.bleckmann.com:81/BMAPI/BleckmannApi/api/returnorder/PostMode3</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h2 class="h2 title toc-headings">Request Parameters as JSON</h2>
            Sample token in Request header - Apoyar: d34e0171-93c2-4cb5-9756-6fe6a4bed04a
            <div class="geshifilter">
                <pre style="border-left:0px;">
                    {
                        "ConsumerName1":"HARVEY",
                        "ConsumerEmail":"",
                        "ConsumerShipStreet1":"Wacholderweg",
                        "ConsumerFromShipHouseNumber":"52a",
                        "ConsumerFromShipPostalCode":"26133",
                        "ConsumerFromShipCity":"OLDENBURG",
                        "ConsumerShipState":"DE",
                        "ConsumerFromShipCountry":"DE",
                        "CarrierId":"4",
                        "FKCustomerId":"LAUNATHL",
                        "ShipFromWarehouseId": "AE",
                        "CarrierName":"DHL",
                        "UserId":2,
                        "Mode":3,
                        "BccEmail":"x@x.com",
                        "OrderId":"89898989",
                        "CustomerName":"Supergroup",
			"SystemOption":"RITROV BE",
			"Reference1":"RMAID",
			"Reference2":"",
			"Reference3":"",
			"Reference4":""
                    }
                </pre>
            </div>
            <h2 class="h2 title toc-headings">Json Response</h2>

            <div class="geshifilter">
                <h3>Status=1000: Return order created but Return Label not Generated</h3>
                <pre style="border-left:0px;">
                    {
                    "Status":"1000",
                    "Messages":"Error Message",
                    "Id":"ReturnorderId"
                    }

                    HttpStatusCode BadRequest 400.
                </pre>
            </div>
            <div class="geshifilter">
                <h3>Status=2000: Return order created and Return Label generated</h3>
                <pre style="border-left:0px;">
{
"Status": "2000",
"Messages": "Successfully Return Order Created",
"Id": "784513299",
"TrackingNumber": "545334014060",
"TrackingUrl": "https://nolp.dhl.de/nextt-online-public/set_identcodes.do?lang=en&idc=545334014060&rfn=&extendedSearch=true",
"LabelUrl": "http://api.bleckmann.apoyar.eu/Labels/LAUNATHL/DHL/784513299.pdf"
}

HttpStatusCode OK 200.
                </pre>
            </div>
            <div class="geshifilter">
                <h3>Status=0: Return order NOT created and Return Label NOT Generated</h3>
                <pre style="border-left:0px;">
                    {
                    "Status":"0",
                    "Messages":"Error Message"
                    }

                    HttpStatusCode BadRequest 400.
                </pre>
            </div>
          </div>

        </div>
        <div class="content">
            <div>
                <div class="toc-item-anchor"><a name="mode4"></a></div>
                <h2 class="h2 title toc-headings" style="color:#cc1543;">Operation Mode 4</h2>
            </div>

            <div class="toc-item-anchor"><a name="PostSearchOrders"></a></div>
            <h2 class="h2 title toc-headings">PostSearchOrders</h2>
            <ul class="details">
                <li><i>URL: </i>http://<<baseurl>>/api/Order/PostSearchOrders</li>
                <li><i>Description: </i>Get Order and Orderlines by ConumserEmail and Orderid. Please send atleast one of emailid or phone or name. CustomerID is a mandatory field.</li>
            </ul>
            <h2 class="h2 title toc-headings">Method</h2>
            <table cellspacing="1" cellpadding="1" border="1">
                <thead>
                    <tr>
                        <th scope="col"><strong>Method</strong></th>
                        <th scope="col"><strong>Description</strong></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>PostSearchOrders</td>
                        <td>Get Order and Orderlines by ConumserEmail and Orderid.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    </tr>
                </tbody>
            </table>
            <h2 class="h2 title toc-headings">Call Details</h2>
            <table cellspacing="0" cellpadding="0" border="0">
                <tbody>
                    <tr>
                        <td nowrap="">
                            <p><strong>Field Name</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Sample Value</strong></p>
                        </td>
                        <td nowrap="">
                          <p><strong>Optional</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Description</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Data Type</strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Email</p>
                        </td>
                        <td nowrap="">
                            <p>x@x.com</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td nowrap="">
                            <p>Provide Valid Email</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>OrderId</p>
                        </td>
                        <td nowrap="">
                            <p>41P24005050000126</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td nowrap="">
                            <p>AlphaNumeric</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Phone</p>
                        </td>
                        <td nowrap="">
                            <p>9999999999</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td nowrap="">
                            <p>Provide Valid Phone Number</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Name</p>
                        </td>
                        <td nowrap="">
                            <p>Xxx</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td nowrap="">
                            <p></p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>CustomerId</p>
                        </td>
                        <td nowrap="">
                            <p>apoyartest</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td nowrap="">
                            <p>Alpha Numeric</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h2 class="h2 title toc-headings">Request example</h2>
            <table cellspacing="0" cellpadding="0" border="0">
                <tbody>
                    <tr>
                        <td nowrap="">
                            <p><strong>Location</strong></p>
                        </td>
                        <td>
                            <p><strong>URL</strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Sandbox URL</p>
                        </td>
                        <td>
                            <p>http://api.bleckmann.apoyar.eu/api/Order/PostSearchOrders</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Live URL</p>
                        </td>
                        <td>
                            <p>http://returns.bleckmann.com:81/BMAPI/BleckmannApi/api/Order/PostSearchOrders</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h2 class="h2 title toc-headings">Request JSON example</h2>
            <div class="geshifilter">
                <pre style="border-left:0px;">
                [{
                "Email":"x@x.com",
                "Name":"",
                "Orderid":"",
                "Phone":""
                }]
                </pre>
            </div>
            <h2 class="h2 title toc-headings">Response example</h2>
            <div class="geshifilter">
                <pre style="border-left:0px;">
                    [
                      {
                        "Status": 10,
                        "ShipmentId": "430000010001",
                        "FKCustomerID": "apoyartest",
                        "Consumerid": "TRGIT1",
                        "ConsumerEmail": "sriramsukesh@gmail.com",
                        "ShipFromWarehouseId": "KHTRUEFC",
                        "Source": "RP",
                        "OrderType": "NIET-MP",
                        "OrderId": "430000010001",
                        "ConsumerPhoneNumber": "1231231231",
                        "ShippedDate": "2013-04-26T09:18:25.511388",
                        "DeliveyDate": "1800-01-01T00:00:00",
                        "MaxReturnDays": -1,
                        "ConsumerName1": "TRUE RELIGION BRAND JEANS ITAL",
                        "ConsumerShipStreet1": "VIA MORIMONDO 5",
                        "ConsumerShipStreet2": "/",
                        "ConsumerShipHouseNumber": "",
                        "ConsumerShipPostalCode": "20143",
                        "ConsumerShipCity": "MILAN",
                        "ConsumerShipState": "IT",
                        "ConsumerShipCountry": "ITA",
                        "ConsumerLanguage": "",
                        "TotalValue": 0,
                        "BMOrderLine": null
                      }
                    ] 

                </pre>
            </div>
            <div class="toc-item-anchor"><a name="GetBMAllOrdersbyid4"></a></div>
            <h2 class="h2 title toc-headings">GetBMAllOrdersbyid</h2>
            <ul class="details">
                <li><i>URL: </i>http://<<baseurl>>/api/Order/GetBMAllOrdersbyid</li>
                <li><i>Description: </i>This call is used to get Order and Orderlines by ConsumerEmail and Orderid from this response pick up the Data(How to use Mention in Below Table of PostBMReturnOrder for fields) as this will be used in the subsequesnt API “PostBMReturnOrder” and from that Data ConsumerShipCountry and FKCustomerID field to be used in “GetBMCarriersbyCustomerid”</li>
            </ul>
            <h2 class="h2 title toc-headings">Method</h2>
            <table cellspacing="1" cellpadding="1" border="1">
                <thead>
                    <tr>
                        <th scope="col"><strong>Method</strong></th>
                        <th scope="col"><strong>Description</strong></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>GetBMAllOrdersbyId</td>
                        <td>Gets all Order and Orderlines by ConsumerEmail and Orderid&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    </tr>
                </tbody>
            </table>
            <h2 class="h2 title toc-headings">Call Details</h2>
            <table cellspacing="0" cellpadding="0" border="0">
                <tbody>
                    <tr>
                        <td nowrap="">
                            <p><strong>Field Name</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Sample Value</strong></p>
                        </td>
                        <td nowrap="">
                          <p><strong>Optional</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Description</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Data Type</strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Email</p>
                        </td>
                        <td nowrap="">
                            <p>x@x.com</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td nowrap="">
                            <p>Provide Valid Email</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>OrderId</p>
                        </td>
                        <td nowrap="">
                            <p>411400061002</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td nowrap="">
                            <p>AlphaNumeric</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>CustomerId</p>
                        </td>
                        <td nowrap="">
                            <p>apoyartest</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td nowrap="">
                            <p>AlphaNumeric</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h2 class="h2 title toc-headings">Request example</h2>
            <table cellspacing="0" cellpadding="0" border="0">
                <tbody>
                    <tr>
                        <td nowrap="">
                            <p><strong>Location</strong></p>
                        </td>
                        <td>
                            <p><strong>URL</strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Sandbox URL</p>
                        </td>
                        <td>
                            <p>http://api.bleckmann.apoyar.eu/api/Order/GetBMAllOrdersbyid?Email=x@x.com&Orderid=411400061002&Customerid=test</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Live URL</p>
                        </td>
                        <td>
                            <p>http://returns.bleckmann.com:81/BMAPI/BleckmannApi/api/Order/GetBMAllOrdersbyid?Email=x@x.com&Orderid=411400061002&Customerid=apoyartest</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h2 class="h2 title toc-headings">Response example</h2>
            <div class="geshifilter">
                <pre style="border-left:0px;">
                {
                    Status: -1,
                    ShipmentId: "411400061002",
                    FKCustomerID: "",
                    Consumerid: "HA0006",
                    ConsumerEmail: "x@x.com",
                    ShipFromWarehouseId: "KHTRUEFC",
                    Source: "RP",
                    OrderType: "NIET-MP",
                    OrderId: "411400061002",
                    ConsumerPhoneNumber: "1231231231",
                    ShippedDate: "2013-04-19T15:00:50",
                    DeliveyDate: "1800-01-01T00:00:00",
                    MaxReturnDays: -1,
                    ConsumerName1: "HARRODS DATA ENTRY DEPT. DISTR",
                    ConsumerShipStreet1: "MILL LANE",
                    ConsumerShipStreet2: "/",
                    ConsumerShipHouseNumber: "",
                    ConsumerShipPostalCode: "RG19 4AL",
                    ConsumerShipCity: "THATCHAM - BERKSHIRE",
                    ConsumerShipState: "GB",
                    ConsumerShipCountry: "GBR",
                    ConsumerLanguage: "",
                    TotalValue: 0,
                    BMOrderLine: [
                        {
                            Status: 10,
                            WarehouseId: "KHTRUEFC",
                            ShipmentLineId: 25005,
                            ShipmentId: null,
                            OrderId: "411400061002",
                            OrderlineID: 25005,
                            SKU: "SU13M1513-4643.XL",
                            StyleDescription: "AMERICAN HORSESHOE TEE",
                            ColourDescription: "RUGBY BLUE",
                            SizeDescription: "XL",
                            EANBARCODE: "887150756991",
                            HTS: "",
                            Origine: "",
                            Price: 20.9,
                            ProductCurrency: "GBP",
                            UnitWeight: 0.001,
                            UnitOfMeasure: "STUKS",
                            HazmatCode: "",
                            QtyShipped: 5,
                            TotalLineAmount: 0
                        },
                        {
                            Status: 10,
                            WarehouseId: "KHTRUEFC",
                            ShipmentLineId: 25002,
                            ShipmentId: null,
                            OrderId: "411400061002",
                            OrderlineID: 25002,
                            SKU: "SU13M1513-4643.S",
                            StyleDescription: "AMERICAN HORSESHOE TEE",
                            ColourDescription: "RUGBY BLUE",
                            SizeDescription: "S",
                            EANBARCODE: "887150756960",
                            HTS: "",
                            Origine: "",
                            Price: 20.9,
                            ProductCurrency: "GBP",
                            UnitWeight: 0.001,
                            UnitOfMeasure: "STUKS",
                            HazmatCode: "",
                            QtyShipped: 4,
                            TotalLineAmount: 0
                        },
                        {
                            Status: 10,
                            WarehouseId: "KHTRUEFC",
                            ShipmentLineId: 25003,
                            ShipmentId: null,
                            OrderId: "411400061002",
                            OrderlineID: 25003,
                            SKU: "SU13M1513-4643.M",
                            StyleDescription: "AMERICAN HORSESHOE TEE",
                            ColourDescription: "RUGBY BLUE",
                            SizeDescription: "M",
                            EANBARCODE: "887150756977",
                            HTS: "",
                            Origine: "",
                            Price: 20.9,
                            ProductCurrency: "GBP",
                            UnitWeight: 0.001,
                            UnitOfMeasure: "STUKS",
                            HazmatCode: "",
                            QtyShipped: 6,
                            TotalLineAmount: 0
                        }
                    ]
                }

                </pre>
            </div>
            <div class="toc-item-anchor"><a name="GetAllReturnReasonsbyCustomerid4"></a></div>
            <h2 class="h2 title toc-headings">GetAllReturnReasonsbyCustomerid</h2>
            <ul class="details">
                <li><i>URL: </i>http://<<baseurl>>/api/returnreason/GetAllReturnReasonsbyCustomerid</li>
                <li><i>Description: </i>This call is used to get Returnreasons by Customer ID and from this response pick up the values for  PKReasonID as these values will be used in “PostBMReturnOrder.</li>
            </ul>
            <h2 class="h2 title toc-headings">Method</h2>
            <table cellspacing="1" cellpadding="1" border="1">
                <thead>
                    <tr>
                        <th scope="col"><strong>Method</strong></th>
                        <th scope="col"><strong>Description</strong></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>GetAllReturnReasonsbyCustomerId</td>
                        <td>Get Returnreaons for customer language wise and with sequence no by Customer Id&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    </tr>
                </tbody>
            </table>
            <h2 class="h2 title toc-headings">Call Details</h2>
            <table cellspacing="0" cellpadding="0" border="0">
                <tbody>
                    <tr>
                        <td nowrap="">
                            <p><strong>Field Name</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Sample Value</strong></p>
                        </td>
                        <td nowrap="">
                          <p><strong>Optional</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Description</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Data Type</strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>CustomerId</p>
                        </td>
                        <td nowrap="">
                            <p>apoyartest</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td nowrap="">
                            <p>Take value from API Call “GetBMAllOrdersbyid” field FKCustomerID</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h2 class="h2 title toc-headings">Request example</h2>
            <table cellspacing="0" cellpadding="0" border="0">
                <tbody>
                    <tr>
                        <td nowrap="">
                            <p><strong>Location</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>URL</strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Sandbox URL</p>
                        </td>
                        <td nowrap="">
                            <p>http://api.bleckmann.apoyar.eu/api/returnreason/GetAllReturnReasonsbyCustomerid?Customerid=test</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Live URL</p>
                        </td>
                        <td nowrap="">
                            <p>http://returns.bleckmann.com:81/BMAPI/BleckmannApi/api/returnreason/GetAllReturnReasonsbyCustomerid?Customerid=apoyartest</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h2 class="h2 title toc-headings">Response example</h2>
            <div class="geshifilter">
                <pre style="border-left:0px;">
                    [
                      [
                        {
                          "PKReasonID": 84,
                          "Reason": "The product did not match its description1",
                          "FKCustomerID": "apoyartest",
                          "IsActive": true,
                          "FkLanguageid": 1,
                          "Uid": "104",
                          "LanguageName": "English",
                          "Sequenceno": 4
                        },
                        {
                          "PKReasonID": 85,
                          "Reason": "Le produit ne correspond &#224; sa description",
                          "FKCustomerID": "apoyartest",
                          "IsActive": true,
                          "FkLanguageid": 2,
                          "Uid": "104",
                          "LanguageName": "French",
                          "Sequenceno": 4
                        },
                        {
                          "PKReasonID": 86,
                          "Reason": "Het product komt niet overeen de beschrijving",
                          "FKCustomerID": "apoyartest",
                          "IsActive": true,
                          "FkLanguageid": 3,
                          "Uid": "104",
                          "LanguageName": "Dutch",
                          "Sequenceno": 4
                        }
                      ],
                      [
                        {
                          "PKReasonID": 87,
                          "Reason": "Incorrect Product or Size Ordered",
                          "FKCustomerID": "apoyartest",
                          "IsActive": true,
                          "FkLanguageid": 1,
                          "Uid": "105",
                          "LanguageName": "English",
                          "Sequenceno": 7
                        },
                        {
                          "PKReasonID": 88,
                          "Reason": " Produit ou Taille incorrecte Ordonn&#233;",
                          "FKCustomerID": "apoyartest",
                          "IsActive": true,
                          "FkLanguageid": 2,
                          "Uid": "105",
                          "LanguageName": "French",
                          "Sequenceno": 7
                        },
                        {
                          "PKReasonID": 89,
                          "Reason": " Onjuiste product of maat besteld",
                          "FKCustomerID": "apoyartest",
                          "IsActive": true,
                          "FkLanguageid": 3,
                          "Uid": "105",
                          "LanguageName": "Dutch",
                          "Sequenceno": 7
                        }
                      ]
                    ]
                </pre>
            </div>

            <div class="toc-item-anchor"><a name="GetBMCarriersbyCustomerid4"></a></div>
            <h2 class="h2 title toc-headings">GetBMCarriersbyCustomerid</h2>
            <ul class="details">
                <li><i>URL: </i>http://<<baseurl>>/api/Carrier/GetBMCarriersbyCustomerid</li>
                <li><i>Description: </i>This call is used to get Carriers by Customer ID and selected country (which you get from above API call) and from this response pick up the values for  PKCarrierid, Carriername, Warehouseid as these values will be used in “PostMode1”.</li>
            </ul>
            <h2 class="h2 title toc-headings">Method</h2>
            <table cellspacing="1" cellpadding="1" border="1">
                <thead>
                    <tr>
                        <th scope="col"><strong>Method</strong></th>
                        <th scope="col"><strong>Description</strong></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>GetBMCarriersbyCustomerId</td>
                        <td>Get Carriers by Customer Id and Country Code&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    </tr>
                </tbody>
            </table>
            <h2 class="h2 title toc-headings">Call Details</h2>
            <table cellspacing="0" cellpadding="0" border="0">
                <tbody>
                    <tr>
                        <td nowrap="">
                            <p><strong>Field Name</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Sample Value</strong></p>
                        </td>
                        <td nowrap="">
                          <p><strong>Optional</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Description</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Data Type</strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>CountryCode</p>
                        </td>
                        <td nowrap="">
                            <p>GB</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td nowrap="">
                            <p>Take value from API Call “GetBMAllOrdersbyid” field ConsumerShipCountry</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>CustomerId</p>
                        </td>
                        <td nowrap="">
                            <p>apoyartest</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td nowrap="">
                            <p>Take value from API Call “GetBMAllOrdersbyid” field FKCustomerID</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h2 class="h2 title toc-headings">Request example</h2>
            <table cellspacing="0" cellpadding="0" border="0">
                <tbody>
                    <tr>
                        <td nowrap="">
                            <p><strong>Location</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>URL</strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Sandbox URL</p>
                        </td>
                        <td nowrap="">
                            <p>http://api.bleckmann.apoyar.eu/api/Carrier/GetBMCarriersbyCustomerid?Customerid=test&CountryCode=GB</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Live URL</p>
                        </td>
                        <td nowrap="">
                            <p>http://returns.bleckmann.com:81/BMAPI/BleckmannApi/api/Carrier/GetBMCarriersbyCustomerid?Customerid=apoyartest&CountryCode=GB</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h2 class="h2 title toc-headings">Response example</h2>
            <div class="geshifilter">
                <pre style="border-left:0px;">
                    [
                      {
                        "PKCarrierID": 1,
                        "CarrierName": "DHL",
                        "Isactive": true,
                        "WarehouseId": "KHTRUEFC",
                        "GlobalSetting": null,
                        "CarrierSetting": null
                      },
                      {
                        "PKCarrierID": 3,
                        "CarrierName": "Royal Mail",
                        "Isactive": true,
                        "WarehouseId": "KHTRUEFC",
                        "GlobalSetting": null,
                        "CarrierSetting": null
                      },
                      {
                        "PKCarrierID": 3,
                        "CarrierName": "Royal Mail",
                        "Isactive": true,
                        "WarehouseId": "KRUISHOUTEM1",
                        "GlobalSetting": null,
                        "CarrierSetting": null
                      },
                      {
                        "PKCarrierID": 5,
                        "CarrierName": "UPS",
                        "Isactive": true,
                        "WarehouseId": "KHTRUEFC",
                        "GlobalSetting": null,
                        "CarrierSetting": null
                      }
                    ]
                </pre>
            </div>
            <div class="toc-item-anchor"><a name="PostBMReturnOrder4"></a></div>
            <h2 class="h2 title toc-headings">PostBMReturnOrder</h2>
            <ul class="details">
                <li><i>URL: </i>http://<<baseurl>>/api/returnorder/PostBMReturnOrder</li>
                <li><i>Description: </i>This Call for placing return order with order information.</li>
            </ul>

            <h2 class="h2 title toc-headings">Call Details</h2>
            <table cellspacing="0" cellpadding="0" border="0">
                <tbody>
                    <tr>
                        <td nowrap="">
                            <p><strong>Field Name</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Sample Value</strong></p>
                        </td>
                        <td nowrap="">
                          <p><strong>Optional</strong></p>
                        </td>
                        <td>
                            <p><strong>Description</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Data Type</strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ConsumerId</p>
                        </td>
                        <td nowrap="">
                            <p>101</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” field Consumerid ID of the consumer Alpha numeric Length 25</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td  nowrap="">
                            <p>ConsumerName1</p>
                        </td>
                        <td nowrap="">
                            <p>HARVEY NICHOLS DIST.CENTRE -C</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” field ConsumerName1 Name of the Consumer Length 35</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td  nowrap="">
                            <p>ConsumerName2</p>
                        </td>
                        <td nowrap="">
                            <p></p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” field ConsumerName2 Length 35</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td  nowrap="">
                            <p>ConsumerEmail</p>
                        </td>
                        <td nowrap="">
                            <p>abc@apoyar.net</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” field ConsumerEmail Email address of the consumer Length 256</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td  nowrap="">
                            <p>ConsumerEmail2</p>
                        </td>
                        <td nowrap="">
                            <p>abc@apoyar.net</p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>This is user Defined Email address of the consumer Length 256</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ConsumerShipStreet1</p>
                        </td>
                        <td nowrap="">
                            <p>DIMENSION LILIPUT</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” field ConsumerShipStreet1 Consumer Street 1 Length 35</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ConsumerShipStreet2</p>
                        </td>
                        <td nowrap="">
                            <p>DIMENSION</p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” field ConsumerShipStreet2 Consumer Street 2 Length 35</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ConsumerShipStreet3</p>
                        </td>
                        <td nowrap="">
                            <p>DIMENSION</p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” field ConsumerShipStreet3 Consumer Street 3 Length 35</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>

                    <tr>
                        <td nowrap="">
                            <p>ConsumerPhoneNumber</p>
                        </td>
                        <td nowrap="">
                            <p>1234567891</p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” field ConsumerPhoneNumber Consumer Phone Length 15</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ConsumerFromShipHouseNumber</p>
                        </td>
                        <td nowrap="">
                            <p>1-2-3</p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” field ConsumerFromShipHouseNumber Consumer House No Length 15</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ConsumerFromShipPostalCode</p>
                        </td>
                        <td nowrap="">
                            <p>1030</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” field ConsumerShipPostalCode Consumer Postal Code Length 10</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ConsumerFromShipCity</p>
                        </td>
                        <td nowrap="">
                            <p>NORTHAMPTON</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” field ConsumerFromShipCity Consumer City Length 35</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ConsumerShipState</p>
                        </td>
                        <td nowrap="">
                            <p>GB</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” field ConsumerShipState Consumer State Length 35</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ConsumerFromShipCountry</p>
                        </td>
                        <td nowrap="">
                            <p>GB</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>User will select a Country from the options given. To get the options see API Call “GetAllActiveCountriesbyCustomerid” field CountryCode</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>OrderId</p>
                        </td>
                        <td nowrap="">
                            <p>410009352004</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” field OrderId Orderid Length 50</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Ordertype</p>
                        </td>
                        <td nowrap="">
                            <p>MUPS STD</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” field OrderType Ordertype Length 20</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ReturnOrderTotalRefundAmount</p>
                        </td>
                        <td nowrap="">
                            <p>74.00</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Make it total of Returnorder items selected Amount in Decimal</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Source</p>
                        </td>
                        <td nowrap="">
                            <p></p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” field Source Length 20</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ShipmentId</p>
                        </td>
                        <td nowrap="">
                            <p>410009352004</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” field ShipmentId Length 20</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>

                    <tr>
                        <td nowrap="">
                            <p>CarrierId</p>
                        </td>
                        <td nowrap="">
                            <p>1</p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>User will select a Country from the options given. To get the options see API Call “GetAllCarriers” field PKCarrierId. If not specified, details from preferred Carrier settings will be used.</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>FKCustomerId</p>
                        </td>
                        <td nowrap="">
                            <p>apoyartest</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” field FKCustomerID Customerid Length 255 numeric</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>CustomerName</p>
                        </td>
                        <td nowrap="">
                            <p>True Religion</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>CustomerName Length 35</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ShipFromWarehouseId</p>
                        </td>
                        <td nowrap="">
                            <p>ATPOST123</p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>User will select a Country from the options given. To get the options see API Call “GetBMCarriersbyCustomerid” field WarehouseId. If not specified, details from preferred Carrier settings will be used.</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>CarrierName</p>
                        </td>
                        <td nowrap="">
                            <p>XYZ</p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td >
                            <p>User will select a Country from the options given. To get the options see API Call “GetBMCarriersbyCustomerid” field CarrierName. If not specified, details from preferred Carrier settings will be used.</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Mode</p>
                        </td>
                        <td nowrap="">
                            <p>2</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Send mode as 2</p>
                        </td>
                        <td nowrap="">
                            <p>Integer</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>BccEmail</p>
                        </td>
                        <td nowrap="">
                            <p>x@x.com</p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>Customer Email</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Apoyar</p>
                        </td>
                        <td nowrap="">
                            <p>ahgsdhfagf</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>‘GetBMAllOrdersbyId’ you will get the token in header with field ‘apoyar’ in this function send in header to respective api ‘PostBMReturnOrder’</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>LineId</p>
                        </td>
                        <td nowrap="">
                            <p>1</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” Array BMOrderLine selected orderline field OrderlineID</p>
                        </td>
                        <td nowrap="">
                            <p>Integer</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>OrderId</p>
                        </td>
                        <td nowrap="">
                            <p>410009352004</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” Array BMOrderLine selected orderline field OrderId Alphanumeric Length 50</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ShipmentId</p>
                        </td>
                        <td nowrap="">
                            <p>410009352004</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” Array BMOrderLine selected orderline field ShipmentId Alphanumeric Length 20</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>SKU</p>
                        </td>
                        <td nowrap="">
                            <p>MC907XQ0-COKM.32</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” Array BMOrderLine selected orderline field SKU Alphanumeric Length 50</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>

                    <tr>
                        <td nowrap="">
                            <p>EanBarcode</p>
                        </td>
                        <td nowrap="">
                            <p>889347388510</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” Array BMOrderLine selected orderline field EANBARCODE Alphanumeric Length 14</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Price</p>
                        </td>
                        <td nowrap="">
                            <p>22.0</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” Array BMOrderLine selected orderline field Price Decimal</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ProductCurrency</p>
                        </td>
                        <td nowrap="">
                            <p>GBP</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” Array BMOrderLine selected orderline field ProductCurrency Length 3</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>QtyReturned</p>
                        </td>
                        <td nowrap="">
                            <p>3</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Selected Quantity</p>
                        </td>
                        <td nowrap="">
                            <p>Integer</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ReturnReasonId</p>
                        </td>
                        <td nowrap="">
                            <p>1</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Selected Return Reason ID</p>
                        </td>
                        <td nowrap="">
                            <p>Integer</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>TotalLineAmount</p>
                        </td>
                        <td nowrap="">
                            <p>74.0</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Price multiply with Selected Quantity Count</p>
                        </td>
                        <td nowrap="">
                            <p>Decimal</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Status</p>
                        </td>
                        <td nowrap="">
                            <p>1</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Send Default as 1</p>
                        </td>
                        <td nowrap="">
                            <p>Integer</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>UserId</p>
                        </td>
                        <td nowrap="">
                            <p>123</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Customer Representative Id</p>
                        </td>
                        <td nowrap="">
                            <p>Integer</p>
                        </td>
                    </tr>
                </tbody>
            </table>

            <h2 class="h2 title toc-headings">Request example</h2>
            <table cellspacing="0" cellpadding="0" border="0">
                <tbody>
                    <tr>
                        <td nowrap="">
                            <p><strong>Location</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>URL</strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Sandbox URL</p>
                        </td>
                        <td nowrap="">
                            <p>http://api.bleckmann.apoyar.eu/api/returnorder/PostBMReturnOrder</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Live URL</p>
                        </td>
                        <td nowrap="">
                            <p>http://returns.bleckmann.com:81/BMAPI/BleckmannApi/api/returnorder/PostBMReturnOrder</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h2 class="h2 title toc-headings">Request Parameters as JSON</h2>
            Sample token in request header - Apoyar:92600f29-10d0-4c5f-b13a-1dbdee2572d4
            <div class="geshifilter">
                <pre style="border-left:0px;">
                   {
                    "CarrierId":19,
                    "CarrierName":"Fastway",
                    "ConsumerEmail":"x@x.com",
                    "ConsumerEmail2":"",
                    "ConsumerFromShipCity":"MIDDLESBOROUGH",
                    "ConsumerFromShipCountry":"IRL",
                    "ConsumerFromShipHouseNumber":"",
                    "ConsumerFromShipPostalCode":"A65 F4E2",
                    "ConsumerId":101,
                    "ConsumerName1":"PSYCHE LIMITED",
                    "ConsumerShipStreet1":"175-187 LINTHORPE ROAD",
                    "ConsumerPhoneNumber":"1231231231",
                    "ConsumerShipState":"IR",
                    "ConsumerShipStreet2":"/",
                    "FKCustomerId":"TRUEFC",
                    "OrderId":"410009352004",
                    "Ordertype":"MUPS STD",
                    "ReturnOrderTotalRefundAmount":"74.00",
                    "ShipFromWarehouseId":"KHTRUEFC",
                    "ShipmentId":"410009352004",
                    "Source":"RP",
                    "Status":1,
                    "Mode":4,
                    "UserId":"2",
                    "CustomerName":"TrueReligion",
                    "BccEmail":"x@x.com",
                    "ReturnOrderLine":[{
                        "EanBarcode":"889347388510",
                        "LineId":1,
                        "OrderId":"410009352004",
                        "Price":"74.00",
                        "ProductCurrency":"GBP",
                        "QtyReturned":1,
                        "ReturnReasonId":108,
                        "SKU":"MC907XQ0-COKM.32",
                        "ShipmentId":"410009352004",
                        "Status":1,
                        "TotalLineAmount":74
                    }]
                }

                </pre>
            </div>
            <h2 class="h2 title toc-headings">Json Response</h2>

            <div class="geshifilter">
                <h3>Status=1000: Return order created but Return Label not Generated</h3>
                <pre style="border-left:0px;">
                    {
                    "Status":"1000",
                    "Messages":"Error Message",
                    "Id":"ReturnorderId"
                    }

                    HttpStatusCode BadRequest 400.
                </pre>
            </div>
            <div class="geshifilter">
                <h3>Status=2000: Return order created and Return Label generated</h3>
                <pre style="border-left:0px;">
		{
		"Status": "2000",
		"Messages": "Successfully Return Order Created",
		"Id": "902483300",
		"TrackingNumber": "20000000033",
		"TrackingUrl": "http://fastway.ie/courier-services/track-your-parcel?l=20000000033",
		"LabelUrl": "http://api.bleckmann.apoyar.eu/Labels/TRUEFC/Fastway/902483300.pdf"
		}

		HttpStatusCode OK 200.
                </pre>
            </div>
            <div class="geshifilter">
                <h3>Status=0: Return order NOT created and Return Label NOT Generated</h3>
                <pre style="border-left:0px;">
                    {
                    "Status":"0",
                    "Messages":"Error Message"
                    }

                    HttpStatusCode BadRequest 400.
                </pre>
            </div>
        </div>
        <div class="content">
            <div>
                <div class="toc-item-anchor"><a name="mode5"></a></div>
                <h2 class="h2 title toc-headings" style="color:#cc1543;">Operation Mode 5</h2>
            </div>

<!--             <div class="toc-item-anchor"><a name="GetAllReturnReasonsbyCustomerid5"></a></div>
            <h2 class="h2 title toc-headings">GetAllReturnReasonsbyCustomerid</h2>
            <ul class="details">
                <li><i>URL: </i>http://<<baseurl>>/api/returnreason/GetAllReturnReasonsbyCustomerid</li>
                <li><i>Description: </i>This call is used to get Returnreasons by Customer ID and from this response pick up the values for  PKReasonID as these values will be used in “PostBMReturnOrder.</li>
            </ul>
            <h2 class="h2 title toc-headings">Method</h2>
            <table cellspacing="1" cellpadding="1" border="1">
                <thead>
                    <tr>
                        <th scope="col"><strong>Method</strong></th>
                        <th scope="col"><strong>Description</strong></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>GetAllReturnreasonsbyCustomerid</td>
                        <td>Get Returnreaons for customer language wise and with sequence no by Customer Id&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    </tr>
                </tbody>
            </table>
            <h2 class="h2 title toc-headings">Call Details</h2>
            <table cellspacing="0" cellpadding="0" border="0">
                <tbody>
                    <tr>
                        <td nowrap="">
                            <p><strong>Field Name</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Sample Value</strong></p>
                        </td>
                        <td nowrap="">
                          <p><strong>Optional</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Description</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Data Type</strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Customerid</p>
                        </td>
                        <td nowrap="">
                            <p>apoyartest</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td nowrap="">
                            <p>Bleckmann CustomerID</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h2 class="h2 title toc-headings">Request example</h2>
            <table cellspacing="0" cellpadding="0" border="0">
                <tbody>
                    <tr>
                        <td nowrap="">
                            <p><strong>Location</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>URL</strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Sandbox URL</p>
                        </td>
                        <td nowrap="">
                            <p>http://api.bleckmann.apoyar.eu/api/returnreason/GetAllReturnReasonsbyCustomerid?Customerid=test</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Live URL</p>
                        </td>
                        <td nowrap="">
                            <p>http://returns.bleckmann.com:81/BMAPI/BleckmannApi/api/returnreason/GetAllReturnReasonsbyCustomerid?Customerid=apoyartest</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h2 class="h2 title toc-headings">Response example</h2>
            <div class="geshifilter">
                <pre style="border-left:0px;">
                    [
                      [
                        {
                          "PKReasonID": 84,
                          "Reason": "The product did not match its description1",
                          "FKCustomerID": "1",
                          "IsActive": true,
                          "FkLanguageid": 1,
                          "Uid": "104",
                          "LanguageName": "English",
                          "Sequenceno": 4
                        },
                        {
                          "PKReasonID": 85,
                          "Reason": "Le produit ne correspond &#224; sa description",
                          "FKCustomerID": "1",
                          "IsActive": true,
                          "FkLanguageid": 2,
                          "Uid": "104",
                          "LanguageName": "French",
                          "Sequenceno": 4
                        },
                        {
                          "PKReasonID": 86,
                          "Reason": "Het product komt niet overeen de beschrijving",
                          "FKCustomerID": "1",
                          "IsActive": true,
                          "FkLanguageid": 3,
                          "Uid": "104",
                          "LanguageName": "Dutch",
                          "Sequenceno": 4
                        }
                      ],
                      [
                        {
                          "PKReasonID": 87,
                          "Reason": "Incorrect Product or Size Ordered",
                          "FKCustomerID": "1",
                          "IsActive": true,
                          "FkLanguageid": 1,
                          "Uid": "105",
                          "LanguageName": "English",
                          "Sequenceno": 7
                        },
                        {
                          "PKReasonID": 88,
                          "Reason": " Produit ou Taille incorrecte Ordonn&#233;",
                          "FKCustomerID": "1",
                          "IsActive": true,
                          "FkLanguageid": 2,
                          "Uid": "105",
                          "LanguageName": "French",
                          "Sequenceno": 7
                        },
                        {
                          "PKReasonID": 89,
                          "Reason": " Onjuiste product of maat besteld",
                          "FKCustomerID": "1",
                          "IsActive": true,
                          "FkLanguageid": 3,
                          "Uid": "105",
                          "LanguageName": "Dutch",
                          "Sequenceno": 7
                        }
                      ]
                    ]

                </pre>
            </div>

            <div class="toc-item-anchor"><a name="GetBMCarriersbyCustomerid5"></a></div>
            <h2 class="h2 title toc-headings">GetBMCarriersbyCustomerid</h2>
            <ul class="details">
                <li><i>URL: </i>http://<<baseurl>>/api/Carrier/GetBMCarriersbyCustomerid</li>
                <li><i>Description: </i>This call is used to get Carriers by Customer ID and selected country (which you get from above API call) and from this response pick up the values for  PKCarrierid, Carriername, Warehouseid as these values will be used in “PostMode1”.</li>
            </ul>
            <h2 class="h2 title toc-headings">Method</h2>
            <table cellspacing="1" cellpadding="1" border="1">
                <thead>
                    <tr>
                        <th scope="col"><strong>Method</strong></th>
                        <th scope="col"><strong>Description</strong></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>GetBMCarriersbyCustomerid</td>
                        <td>Get Carriers by Customer Id and Country Code&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    </tr>
                </tbody>
            </table>
            <h2 class="h2 title toc-headings">Call Details</h2>
            <table cellspacing="0" cellpadding="0" border="0">
                <tbody>
                    <tr>
                        <td nowrap="">
                            <p><strong>Field Name</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Sample Value</strong></p>
                        </td>
                        <td nowrap="">
                          <p><strong>Optional</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Description</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Data Type</strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>CountryCode</p>
                        </td>
                        <td nowrap="">
                            <p>GB</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td nowrap="">
                            <p>Take value from API Call “GetBMAllOrdersbyid” field ConsumerShipCountry</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Customerid</p>
                        </td>
                        <td nowrap="">
                            <p>apoyartest</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td nowrap="">
                            <p>Take value from API Call “GetBMAllOrdersbyid” field FKCustomerID</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h2 class="h2 title toc-headings">Request example</h2>
            <table cellspacing="0" cellpadding="0" border="0">
                <tbody>
                    <tr>
                        <td nowrap="">
                            <p><strong>Location</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>URL</strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Sandbox URL</p>
                        </td>
                        <td nowrap="">
                            <p>http://api.bleckmann.apoyar.eu/api/Carrier/GetBMCarriersbyCustomerid?Customerid=test&CountryCode=GB</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Live URL</p>
                        </td>
                        <td nowrap="">
                            <p>http://returns.bleckmann.com:81/BMAPI/BleckmannApi/api/Carrier/GetBMCarriersbyCustomerid?Customerid=apoyartest&CountryCode=GB</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h2 class="h2 title toc-headings">Response example</h2>
            <div class="geshifilter">
                <pre style="border-left:0px;">
                    [
                      {
                        "PKCarrierID": 1,
                        "CarrierName": "DHL",
                        "Isactive": true,
                        "WarehouseId": "KHTRUEFC",
                        "GlobalSetting": null,
                        "CarrierSetting": null
                      },
                      {
                        "PKCarrierID": 3,
                        "CarrierName": "Royal Mail",
                        "Isactive": true,
                        "WarehouseId": "KHTRUEFC",
                        "GlobalSetting": null,
                        "CarrierSetting": null
                      },
                      {
                        "PKCarrierID": 3,
                        "CarrierName": "Royal Mail",
                        "Isactive": true,
                        "WarehouseId": "KRUISHOUTEM1",
                        "GlobalSetting": null,
                        "CarrierSetting": null
                      },
                      {
                        "PKCarrierID": 5,
                        "CarrierName": "UPS",
                        "Isactive": true,
                        "WarehouseId": "KHTRUEFC",
                        "GlobalSetting": null,
                        "CarrierSetting": null
                      }
                    ]
                </pre>
            </div> -->
            <div class="toc-item-anchor"><a name="PostMode5"></a></div>
            <h2 class="h2 title toc-headings">PostMode5</h2>
            <ul class="details">
                <li><i>URL: </i>http://<<baseurl>>/api/returnorder/PostMode5</li>
                <li><i>Description: </i>This Call for placing return order with order information.</li>
                <li><i>Note: </i>Preferred Carrier Settings of Customer and Country will be used to place the order.</li>
            </ul>

            <h2 class="h2 title toc-headings">Call Details</h2>
            <table cellspacing="0" cellpadding="0" border="0">
                <tbody>
                    <tr>
                        <td nowrap="">
                            <p><strong>Field Name</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Sample Value</strong></p>
                        </td>
                        <td nowrap="">
                          <p><strong>Optional</strong></p>
                        </td>
                        <td>
                            <p><strong>Description</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>Data Type</strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ConsumerId</p>
                        </td>
                        <td nowrap="">
                            <p>101</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>ID of the consumer Alpha numeric Length 25</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td  nowrap="">
                            <p>ConsumerName1</p>
                        </td>
                        <td nowrap="">
                            <p>HARVEY NICHOLS DIST.CENTRE -C</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>ConsumerName1 Name of the Consumer Length 35</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td  nowrap="">
                            <p>ConsumerName2</p>
                        </td>
                        <td nowrap="">
                            <p></p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>ConsumerName2 Length 35</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td  nowrap="">
                            <p>ConsumerEmail</p>
                        </td>
                        <td nowrap="">
                            <p>abc@apoyar.net</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>ConsumerEmail Email address of the consumer Length 256</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td  nowrap="">
                            <p>ConsumerEmail2</p>
                        </td>
                        <td nowrap="">
                            <p>abc@apoyar.net</p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>This is user Defined Email address of the consumer Length 256</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ConsumerShipStreet1</p>
                        </td>
                        <td nowrap="">
                            <p>DIMENSION LILIPUT</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>ConsumerShipStreet1 - Consumer Street 1 Length 35</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ConsumerShipStreet2</p>
                        </td>
                        <td nowrap="">
                            <p>DIMENSION</p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>ConsumerShipStreet2 - Consumer Street 2 Length 35</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ConsumerShipStreet3</p>
                        </td>
                        <td nowrap="">
                            <p>DIMENSION</p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>ConsumerShipStreet3 - Consumer Street 3 Length 35</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>

                    <tr>
                        <td nowrap="">
                            <p>ConsumerPhoneNumber</p>
                        </td>
                        <td nowrap="">
                            <p>1234567891</p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>ConsumerPhoneNumber Consumer Phone Length 15</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ConsumerFromShipHouseNumber</p>
                        </td>
                        <td nowrap="">
                            <p>1-2-3</p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>ConsumerShipHouseNumber Consumer House No Length 15</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ConsumerFromShipPostalCode</p>
                        </td>
                        <td nowrap="">
                            <p>1030</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>ConsumerShipPostalCode Consumer Postal Code Length 10</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ConsumerFromShipCity</p>
                        </td>
                        <td nowrap="">
                            <p>NORTHAMPTON</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>ConsumerShipCity Consumer City Length 35</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ConsumerShipState</p>
                        </td>
                        <td nowrap="">
                            <p>GB</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>ConsumerShipState Consumer State Length 35</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ConsumerFromShipCountry</p>
                        </td>
                        <td nowrap="">
                            <p>GB</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>ConsumerFromShipCountry Consumer Country Length 35</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>OrderId</p>
                        </td>
                        <td nowrap="">
                            <p>410009352004</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>OrderId Orderid Length 50</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Ordertype</p>
                        </td>
                        <td nowrap="">
                            <p>MUPS STD</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>OrderType Ordertype Length 20</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ReturnOrderTotalRefundAmount</p>
                        </td>
                        <td nowrap="">
                            <p>74.00</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Make it total of Returnorder items selected Amount in Decimal</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Source</p>
                        </td>
                        <td nowrap="">
                            <p></p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Source Length 20</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ShipmentId</p>
                        </td>
                        <td nowrap="">
                            <p>410009352004</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>ShipmentId Length 20</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>


                    <tr>
                        <td nowrap="">
                            <p>FKCustomerId</p>
                        </td>
                        <td nowrap="">
                            <p>apoyartest</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Bleckmann CustomerID Customerid Length 255</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>CustomerName</p>
                        </td>
                        <td nowrap="">
                            <p>True Religion</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>CustomerName Length 35</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
<!--                     </tr>
                    <tr>
                        <td nowrap="">
                            <p>Shipfromwarehouseid</p>
                        </td>
                        <td nowrap="">
                            <p>ATPOST123</p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>User will select a Country from the options given. To get the options see API Call “GetBMCarriersbyCustomerid” field WarehouseId. If not specified, details from preferred Carrier settings will be used.</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>CarrierName</p>
                        </td>
                        <td nowrap="">
                            <p>XYZ</p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td >
                            <p>User will select a Country from the options given. To get the options see API Call “GetBMCarriersbyCustomerid” field CarrierName. If not specified, details from preferred Carrier settings will be used.</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr> -->
                    <tr>
                        <td nowrap="">
                            <p>Mode</p>
                        </td>
                        <td nowrap="">
                            <p>5</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Send mode as 5</p>
                        </td>
                        <td nowrap="">
                            <p>Integer</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>BccEmail</p>
                        </td>
                        <td nowrap="">
                            <p>x@x.com</p>
                        </td>
                        <td nowrap="">
                            <p>Yes</p>
                        </td>
                        <td>
                            <p>Customer Email</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>LineId</p>
                        </td>
                        <td nowrap="">
                            <p>1</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Pick from “GetBMAllOrdersbyid” Array BMOrderLine selected orderline field OrderlineID</p>
                        </td>
                        <td nowrap="">
                            <p>Integer</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>OrderId</p>
                        </td>
                        <td nowrap="">
                            <p>410009352004</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>BMOrderLine field OrderId Alphanumeric Length 50</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ShipmentId</p>
                        </td>
                        <td nowrap="">
                            <p>410009352004</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>BMOrderLine field ShipmentId Alphanumeric Length 20</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>SKU</p>
                        </td>
                        <td nowrap="">
                            <p>MC907XQ0-COKM.32</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>BMOrderLine field SKU Alphanumeric Length 50</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>

                    <tr>
                        <td nowrap="">
                            <p>EanBarcode</p>
                        </td>
                        <td nowrap="">
                            <p>889347388510</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>BMOrderLine selected orderline field EANBARCODE Alphanumeric Length 14</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Price</p>
                        </td>
                        <td nowrap="">
                            <p>22.0</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>BMOrderLine field Price Decimal</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ProductCurrency</p>
                        </td>
                        <td nowrap="">
                            <p>GBP</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>BMOrderLine field ProductCurrency Length 3</p>
                        </td>
                        <td nowrap="">
                            <p>String</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>QtyReturned</p>
                        </td>
                        <td nowrap="">
                            <p>3</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Quantity</p>
                        </td>
                        <td nowrap="">
                            <p>Integer</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>ReturnReasonId</p>
                        </td>
                        <td nowrap="">
                            <p>1</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>User will select a ReturnReason from the options given. To get the options see API Call “GetAllReturnreasonsbyCustomerid”</p>
                        </td>
                        <td nowrap="">
                            <p>Integer</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>TotalLineAmount</p>
                        </td>
                        <td nowrap="">
                            <p>74.0</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Price multiply with Selected Quantity Count</p>
                        </td>
                        <td nowrap="">
                            <p>Decimal</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Status</p>
                        </td>
                        <td nowrap="">
                            <p>1</p>
                        </td>
                        <td nowrap="">
                            <p>No</p>
                        </td>
                        <td>
                            <p>Send Default as 1</p>
                        </td>
                        <td nowrap="">
                            <p>Integer</p>
                        </td>
                    </tr>
                </tbody>
            </table>

            <h2 class="h2 title toc-headings">Request example</h2>
            <table cellspacing="0" cellpadding="0" border="0">
                <tbody>
                    <tr>
                        <td nowrap="">
                            <p><strong>Location</strong></p>
                        </td>
                        <td nowrap="">
                            <p><strong>URL</strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Sandbox URL</p>
                        </td>
                        <td nowrap="">
                            <p>http://api.bleckmann.apoyar.eu/api/returnorder/PostMode5</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="">
                            <p>Live URL</p>
                        </td>
                        <td nowrap="">
                            <p>http://returns.bleckmann.com:81/BMAPI/BleckmannApi/api/returnorder/PostMode5</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h2 class="h2 title toc-headings">Request Parameters as JSON</h2>
            <div class="geshifilter">
                <pre style="border-left:0px;">
                    {
                    "ConsumerEmail":"x@x.com",
                    "ConsumerEmail2":"sriramk@apoyar.eu",
                    "ConsumerFromShipCity":"MIDDLESBOROUGH",
                    "ConsumerFromShipCountry":"IRL",
                    "ConsumerFromShipHouseNumber":"",
                    "ConsumerFromShipPostalCode":"A65 F4E2",
                    "ConsumerId":101,
                    "ConsumerName1":"PSYCHE LIMITED",
                    "ConsumerShipStreet1":"175-187 LINTHORPE ROAD",
                    "ConsumerPhoneNumber":"1231231231",
                    "ConsumerShipState":"IR",
                    "ConsumerShipStreet2":"/",
                    "FKCustomerId":"TRUEFC",
                    "CarrierId":19,
                    "CarrierName":"Fastway",
                    "ShipFromWareHouseId":"KHTRUEFC",
                    "CustomerName":"TrueReligion",
                    "OrderId":"410009352004",
                    "Ordertype":"MUPS STD",
                    "ReturnOrderTotalRefundAmount":"74.00",
                    "ShipFromWarehouseId":"OLDENZAL1",
                    "ShipmentId":"410009352004",
                    "Source":"RP",
                    "Status":1,
                    "Mode":5,
                    "BccEmail":"x@x.com",
                    "ReturnOrderLine":
                        [{
                            "EanBarcode":"889347388534",
                            "LineId":2,
                            "OrderId":"410009352004",
                            "Price":"74.00",
                            "ProductCurrency":"GBP",
                            "QtyReturned":1,
                            "ReturnReasonId":108,
                            "SKU":"MC907XQ0-COKM.34",
                            "ShipmentId":"410009352004",
                            "Status":1,
                            "TotalLineAmount":74
                        }]
                    }

                </pre>
            </div>
            <h2 class="h2 title toc-headings">Json Response</h2>

            <div class="geshifilter">
                <h3>Status=1000: Return order created but Return Label not Generated</h3>
                <pre style="border-left:0px;">
                    {
                    "Status":"1000",
                    "Messages":"Error Message",
                    "Id":"ReturnorderId"
                    }

                    HttpStatusCode BadRequest 400.
                </pre>
            </div>
            <div class="geshifilter">
                <h3>Status=2000: Return order created and Return Label generated</h3>
                <pre style="border-left:0px;">
		{
		"Status": "2000",
		"Messages": "Successfully Return Order Created",
		"Id": "891013301",
		"TrackingNumber": "20000000034",
		"TrackingUrl": "http://fastway.ie/courier-services/track-your-parcel?l=20000000034",
		"LabelUrl": "http://api.bleckmann.apoyar.eu/Labels/TRUEFC/Fastway/891013301.pdf"
		}
		
		HttpStatusCode OK 200.
                </pre>
            </div>
            <div class="geshifilter">
                <h3>Status=0: Return order NOT created and Return Label NOT Generated</h3>
                <pre style="border-left:0px;">
                    {
                    "Status":"0",
                    "Messages":"Error Message"
                    }

                    HttpStatusCode BadRequest 400.
                </pre>
            </div>
        </div>
    </article>
  </div>
</main>
<br/>
<br/>


<script type="text/javascript">
    $(function(){
        $('#apicalls').addClass('active');
        $('#intro').removeClass('active');
    });
</script>
<!-->
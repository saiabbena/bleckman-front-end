    <nav class="sub-menu menu-toggle grid-3 portrait-hidden">
      <h1 class="title">Contents</h1>
      <a name="table-of-contents"></a>
      <ol class="toc-node-numbers">
        <li class="toc-node-level-1 first"><a href="#mode1"><span class="toc-text">Operation Mode1</span></a></li>
        <li class="toc-node-level-1"><a href="#mode2"><span class="toc-text">Operation Mode2</span></a></li>
            <li class="toc-node-level-1"><a href="#mode3"><span class="toc-text">Operation Mode3</span></a></li>
            <li class="toc-node-level-1"><a href="#mode4"><span class="toc-text">Operation Mode4</span></a></li>
            <li class="toc-node-level-5"><a href="#mode5"><span class="toc-text">Operation Mode5</span></a></li>
			<li class="toc-node-level-5"><a href="#mode6"><span class="toc-text">Operation Mode6</span></a></li>
      </ol>
    </nav>
    <article class="portrait-8 grid-6 desktop-10">
      <div class="portrait-8 grid-6 desktop-10">
        <div class="content">
          <div>
            <div class="toc-item-anchor"><a name="mode1"></a></div>
            <h2 class="h2 title toc-headings">Operation Mode1 - Simple non-linked form for consumer</h2>

            <ul class="details">
                <li><i>Reason to Call: </i>To place a return order</li>
                <li><i>User: </i>Consumer</li>
                <li><i>Input: </i>Consumer Information</li>
                <li><i>Output: </i>Return order created and label is generated</li>
                
            </ul>
            <h3><i>Overview</i></h3>
            <p>Operation Mode 1 is a Simple non-linked form for consumer to place a return order only with his/her personal information and without any order and order lines infor -mation.</p>

            <div class="toc-item-anchor"><a name="mode2"></a></div>
            <h2 class="h2 title toc-headings toc-headings">Operation Mode2 - Linked login form Consumer</h2>
            <ul class="details">
                <li><i>Reason to Call: </i>To place a return order</li>
                <li><i>User: </i>Consumer</li>
                <li><i>Input: </i>Order Id and Email</li>
                <li><i>Output: </i>Return order created and label is generated</li>
                
            </ul>
            <h3><i>Overview</i></h3>
            <p>Operation Mode 2 is a linked login form for consumer to place a return order by using ConsumerEmail and Orderid as inputs.</p>
          
            <div class="toc-item-anchor"><a name="mode3"></a></div>
            <h2 class="h2 title toc-headings">Operation Mode3 - Simple non-linked form for Customer Service</h2>
            <ul class="details">
                <li><i>Reason to Call: </i>To place a return order</li>
                <li><i>User: </i>Customer Service Representative</li>
                <li><i>Input: </i>Consumer Information</li>
                <li><i>Output: </i>Return order created and label is generated</li>
            </ul>
            <h3><i>Overview</i></h3>
            <p>Operation Mode 3 is a simple non-linked form for Customer Service to place a return order without order and orderlines information only with consumer information.</p>
            <div class="toc-item-anchor"><a name="mode4"></a></div>
            <h2 class="h2 title toc-headings toc-headings">Operation Mode4 - Linked create returnorder form for Customer Service</h2>
            <ul class="details">
                <li><i>Reason to Call: </i>To place a return order</li>
                <li><i>User: </i>Customer Service Representative</li>
                <li><i>Input: </i>Order Id and Email</li>
                <li><i>Output: </i>Return order created and label is generated</li>
                
            </ul>
            <h3><i>Overview</i></h3>
            <p>Operation Mode 4 is a linked form for Customer Service to place a return order with order and order lines information getting by using ConsumerEmail or Orderid or ConsumerName or Phone by that get response one or more Orders from that user will select a order by using selected order Consumeremail and Orderid getting the Order and orderliness and placing the returnorder with that information.</p>
            <div class="toc-item-anchor"><a name="mode5"></a></div>
            <h2 class="h2 title toc-headings toc-headings">Operation Mode5 - Label in the box</h2>
            <ul class="details">
                <li><i>Reason to Call: </i>To place a return order</li>
                <li><i>User: </i>Customer through API</li>
                <li><i>Input: </i>Order Id and Email</li>
                <li><i>Output: </i>Return order created and label is generated</li>
            </ul>
            <h3><i>Overview</i></h3>
            <p>Operation Mode 5 means consuming the api calls by customer at their end and generating the return order label. Process used to place a return order with order and order lines information.</p>
			<div class="toc-item-anchor"><a name="mode6"></a></div>
			<h2 class="h2 title toc-headings toc-headings">Operation Mode6</h2>
			This mode is for the customers of Bleckmann so that they can integrate the API calls into their customized portal.
			The integration will be broadly classified into 2 types:<br/>
			<i>Linked </i>– with order and orderline information<br/>
			<i>Non-Linked </i>– without any order or orderline information.
			<h3><b>Linked:</b></h3>
            Basically there will be 5 Calls:
			<ul class="details">
                <li>a. Consumer can search for orders</li>
                <li>b. Consumer can give order id and fetch the order line information</li>
                <li>c. Consumer should be able to fetch the reasons</li>
                <li>d. Consumers should be able to view the carriers</li>
				<li>e. Consumers should be able to place return order</li>
            </ul>
			<h3><b>Non-Linked:</b></h3>
            Basically there will be 3 Calls:
			<ul class="details">
                <li>a. Need to fetch all active countries</li>
                <li>b. Need to fetch all carriers</li>
                <li>c. Place the return order</li>                
            </ul>
          </div>
        </div>
      </div>
    </article>
  </div>
</main>

<script type="text/javascript">
    $(function(){
        $('#apicalls').removeClass('active');
        $('#intro').addClass('active');
    });
</script>

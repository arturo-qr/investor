<?php	
	/*quotes('goog','select * from yahoo.finance.quotes where symbol=');*/	
	/*quotes('goog','select * from yahoo.finance.quote where symbol=');*/	
	/*	$quote = array("Symbol","Average Daily Volume","Change","Days Low", "Days High", "Year Low", "Year High", 
	"Market Capitalization", "Last Trade Price Only", "Days Range", "Name", "Symbol", "Volume", "Stock Exchange");				
	$quotes = array("Symbol","Ask","Average Daily Volume","Bid","Ask Realtime","Bid Realtime","Book Value","Change Percent Change",
	"Change","Commission","Change Realtime","After Hours Change Realtime","Dividend Share","Last Trade Date","Trade Date","Earnings Share",
	"Error Indication returned for symbol changed invalid",	"EPS Estimate Current Year","EPS Estimate Next Year","EPS Estimate Next Quarter",
	"Days Low","Days High","Year Low","Year High","Holdings Gain Percent","Annualized Gain","Holdings Gain","Holdings Gain Percent Realtime",
	"Holdings Gain Realtime","More Info","Order Book Realtime","Market Capitalization","Market Cap Realtime","EBITDA","Change From Year Low",
	"Percent Change From Year Low","Last Trade Real time With Time","Change Percent Realtime","Change From Year High","Percebt Change From Year High",
	"Last Trade With Time","Last Trade Price Only","High Limit","Low Limit","Days Range","Days Range Realtime","Fiftyday Moving Average",
	"Two Hundredday Moving Average","Change From Two Hundredday Moving Average","Percent Change From Two Hundredday Moving Average",
	"Change From Fiftyday Moving Average","Percent Change From Fiftyday Moving Average","Name","Notes","Open","Previous Close",
	"Price Paid","Changein Percent","Price Sales","Price Book","Ex Dividend Date","PE Ratio","Dividend Pay Date","PE Ratio Realtime",
	"PEG Ratio","Price EPS Estimate Current Year","Price EPS Estimate Next Year","Symbol","Shares Owned","Short Ratio","Last Trade Time",
	"Ticker Trend","Oneyr Target Price","Volume","Holdings Value","Holdings Value Realtime","Year Range","Days Value Change",
	"Days Value Change Realtime","Stock Exchange","Dividend Yield","Percent Change");*/	
	function quotes($symbol,$query){
		$array =array();
		$symbol = "\"".$symbol."\"  ";
		$ayuda = 'and api_key=';
		$key_api = 'dj0yJmk9WHMybWUxMU9uTXFVJmQ9WVdrOVpXRlFkakpETm1zbWNHbzlNakEwT1RnNE9UVTJNZy0tJnM9Y29uc3VtZXJzZWNyZXQmeD0yMw--';
		$api = 'http://query.yahooapis.com/v1/public/yql?q=';
		$query = $query.$symbol;//.$ayuda.$key_api
		
		$params = '&env=http://datatables.org/alltables.env&format=json';
		$session = curl_init($api.urlencode($query).$params);
		curl_setopt($session, CURLOPT_RETURNTRANSFER,true);
  		$json = curl_exec($session);
		curl_close($session);
		$yqlObj =  json_decode($json);
		if(!is_null($yqlObj->query->results)){
			return $yqlObj->query->results->quote;		
		}		
		return -1;	
	}	
	
	/*keystats('goog','select * from yahoo.finance.keystats where symbol=');*/	
	/*$keystats = array("Symbol","Market Cap","Enterprise Value","Trailing PE", "Forward P","PEG Ratio", "Price Sales", "PriceBook", 
	"Enterprise Value Revenue","Enterprise Value EBITDA","Fiscal Year Ends","Most Recent Quarter", "Profit Margin","Operating Margin", 
	"Returnon Assets", "Returnon Equity","Revenue", "Revenue Per Share","Qtrly Revenue Growth", "Gross Profit","EBITDA",
	"Net Income Avlto Common", "Diluted EPS", "Qtrly Earnings Growth","TotalCash","Total Cash Per Share","Total Debt", "Total Debt Equity", 
	"Current Ratio","Book Value Per Share","Operating Cash Flow","Levered Free Cash Flow","Beta","p 52 WeekChange","SP50052 WeekChange",
	"p 52 WeekHigh","p 52 WeekLow","p 50 DayMovingAverage","p 200 DayMovingAverage","Avg Vol","Avg Vol","SharesOutstanding","Float"	,
	"PercentageHeldbyInsiders","PercentageHeldbyInstitutions","SharesShort","ShortRatio","ShortPercentageofFloat","SharesShort",
	"ForwardAnnualDividendRate","ForwardAnnualDividendYield","TrailingAnnualDividendYield","TrailingAnnualDividendYield",
	"p_5YearAverageDividendYield","PayoutRatio","DividendDate","Ex_DividendDate","LastSplitFactor","LastSplitDate");*/	
	function keystats($symbol,$query){		
		$array =array();		
		$symbol = "\"".$symbol."\"  ";		
		$api = 'http://query.yahooapis.com/v1/public/yql?q=';		
		$query = $query.$symbol;		
		$params = '&env=http://datatables.org/alltables.env&format=json';		
		$session = curl_init($api.urlencode($query).$params);		
		curl_setopt($session, CURLOPT_RETURNTRANSFER,true);  		
		$json = curl_exec($session);		
		curl_close($session);		
		$yqlObj =  json_decode($json);		
		if(is_null($yqlObj)){
			return -1;		
		}		
		if(!is_null($yqlObj->query->results)){			
			return $yqlObj->query->results->stats;		
		}		
		return -1;	
	}	
	
	/*historicaldata('goog','select * from yahoo.finance.historicaldata where symbol=', ' and startDate="2009-09-11" and endDate="2010-03-10"');*/	
	/*$hist = array("Date","Date","Open","High", "Low", "Close", "Volume", "Adj Close");*/	
	function historicaldata($symbol,$query,$dates){		
		$array =array();		
		$symbol = "\"".$symbol."\"  ";		
		$api = 'http://query.yahooapis.com/v1/public/yql?q=';		
		$query = $query.$symbol.$dates;		
		$params = '&env=http://datatables.org/alltables.env&format=json';		
		$session = curl_init($api.urlencode($query).$params);		
		curl_setopt($session, CURLOPT_RETURNTRANSFER,true);  		
		$json = curl_exec($session);		
		curl_close($session);		
		$yqlObj =  json_decode($json);		
		if(is_null($yqlObj)){			
			return -1;		
		}		
		if(!is_null($yqlObj->query->results)){			
			return $yqlObj->query->results->quote;		
		}		
		return -1;	
	}
	function options($symbol,$query,$date){		
		$array =array();		
		$symbol = "\"".$symbol."\"  ";		
		$api = 'http://query.yahooapis.com/v1/public/yql?q=';		
		$query = $query.$symbol." AND expiration=".$date;		
		$params = '&env=http://datatables.org/alltables.env&format=json';
		$session = curl_init($api.urlencode($query).$params);		
		curl_setopt($session, CURLOPT_RETURNTRANSFER,true);  		
		$json = curl_exec($session);		
		curl_close($session);		
		$yqlObj =  json_decode($json);		
		if(is_null($yqlObj)){
			return -1;		
		}		
		if(!is_null($yqlObj->query->results)){			
			return $yqlObj->query->results->optionsChain->option;		
		}		
		return -1;	
	}
	function option_symbol($symbol,$query){		
		$array =array();		
		$symbol = "\"".$symbol."\"  ";		
		$api = 'http://query.yahooapis.com/v1/public/yql?q=';		
		$query = $query.$symbol;	
		$params = '&env=http://datatables.org/alltables.env&format=json';
		$session = curl_init($api.urlencode($query).$params);		
		curl_setopt($session, CURLOPT_RETURNTRANSFER,true);  		
		$json = curl_exec($session);		
		curl_close($session);		
		$yqlObj =  json_decode($json);		
		if(is_null($yqlObj)){
			return -1;		
		}		
		if(!is_null($yqlObj->query->results)){			
			return $yqlObj->query->results->option;		
		}		
		return -1;	
	}	
?>